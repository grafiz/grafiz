<?php
namespace Models;
use PDO;
class UserManager extends Model
{
  public function getUser(){return $this->getAll('user', null);}
}

