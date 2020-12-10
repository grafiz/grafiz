<?php
namespace Models;
class Contact
{
  private $id;
  private $nom;
  private $email;
  private $sujet;
  private $message;
  private $date_creation;
  private $color;
  public function __construct(array $data){
    foreach ($data as $key => $value) {
        $method = 'set'.ucfirst($key);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }
}
public function setId(int $id){$this->id = $id;}
public function setNom(string $nom){$this->nom = $nom;}
public function setEmail(string $email){$this->email = $email;}
public function setSujet(string $sujet){$this->sujet = $sujet;}
public function setMessage(string $message){$this->message = $message;}
public function setDate_creation($date){$this->date_creation = $date;}
public function setColor($color){
    $this->color = $color;}

/*** GETTERS */
public function getId()
{
    return $this->id;
}

public function getNom()
{
    return $this->nom;
}

public function getEmail()
{
    return $this->email;
}

public function getSujet()
{
    return $this->sujet;
}

public function getMessage()
{
    return $this->message;
}

public function getDateCreation()
{
    return $this->date_creation;
}

public function getColor()
{
    return $this->color;
}




}