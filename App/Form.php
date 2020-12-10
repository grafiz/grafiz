<?php
namespace App;
class Form
{
   private static $msg;
   private static $success;
   private static $color;
   private static $post;

  public static function isValid(array $post){
    extract($post);
    if(!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)){
      if(strlen($post['nom']) <= 25 && preg_match("#^([a-zA-Z0-9'ïàâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $post['nom'])){
        // je rajoute un regex pr améliorer la validation d'email
        if(filter_var($post['email'], FILTER_VALIDATE_EMAIL) && preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $post['email'])){
          self::$msg = 'Votre message a été envoyé, vous recevrez une réponse dans les 24H &#128512;';
          self::$success = true;
          self::$color = 'is-primary';
          self::$post = array_map('self::secureForm', $post);
        }else{
          self::$msg = 'Adresse email incorrect &#128552;';
          self::$success = false;
          self::$color = 'is-danger';
          self::$post = false;
        }
      }else{
        self::$msg = 'Votre nom est incorrect &#128552;';
        self::$success = false;
        self::$color = 'is-danger';
        self::$post = false;
      }
    }else{
      self::$msg = 'Veuillez remplir tous les champs &#128552;';
      self::$success = false;
      self::$color = 'is-danger';
      self::$post = false;
    }

    return array(
      'msg-contact' => self::$msg, 
      'success' => self::$success,
      'color-contact' => self::$color,
      'post' => self::$post
    );
  }
private static function secureForm($field){
    $field = stripslashes($field);
    $field = strip_tags($field);
    $field = htmlspecialchars($field);
    return $field;
}
}