<?php
namespace Models;
use PDO;
class ContactManager extends Model
{
    public function getContacts(){return $this->getAll('contact', 'Contact');}
    public function getContactsByEmail(){return $this->getAllGroupBy('contact', 'Contact');}
    public function deleteContact($id){$this->delete('contact', $id);}
    public function insertContact($post){
      $colorExists = $this->setColorContact('contact', $post['email']);
      if($colorExists){
        $post['color'] = $colorExists['color'];
      }else{
        $post['color'] = $this->setColor();
      }
      $req = self::$_bdd->prepare('INSERT INTO contact(nom, email, sujet, message, date_creation, color) VALUES(:nom, :email, :sujet, :message, :date_creation, :color)');
      $req->execute(array(
        'nom' => $post['nom'],
        'email' => $post['email'],
        'sujet' => $post['sujet'],
        'message' => $post['message'],
        'date_creation' => date('d/m/Y, H:i:s'),
        'color' => $post['color']
      ));
    }
  /*** vérifie si un user exist à un champ précis */
  public function setColorContact($table, $email){
    $this->getBdd();
    $req = self::$_bdd->prepare('SELECT * FROM ' .$table. ' WHERE email = ?');
    $req->execute(array($email));
    $data = $req->fetch();        
    $req->closeCursor();
    return $data;
  }    

  public function setColor(){
    $red=rand(20,220);
    $green=rand(20,220);
    $blue=rand(20,220);
    $color="rgb($red,$green,$blue)";
    return $color;
  }
  
    public function sendEmail($post){
      $to = 'trafixel.creation@gmail.com';
      $email = strip_tags($post['email']);
      $sujet = strip_tags($post['sujet']);
      $message = strip_tags($post['message']);
  
      $headers[] = 'From:'.$post['email'];
      $headers[] = 'MIME-version: 1.0';
      $headers[] = 'Content-type: text/html; charset=utf-8';
      mail($to,$sujet,$message,implode('\r\n', $headers));
    }
}

