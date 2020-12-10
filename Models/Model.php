<?php
namespace Models;
// j'utilise PDO qui est situé sur le namespace global ce qui m'évite de faire new \PDO
use PDO;
abstract class Model
{
  protected static $_bdd;
  //connexion a la bdd
  private static function setBdd(){
    self::$_bdd = new PDO('mysql:host=localhost;dbname=grafiz;charset=utf8', 'root', '');
    //on utilise les constantes de PDO pour gérer les erreurs
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }
  //fonction de connexion par defaut a la bdd
  protected function getBdd(){
    if (self::$_bdd == null) {
      self::setBdd();
      return self::$_bdd;
    }
  }
  // récupère toute la liste
  // $obj représente la class qui va hydrater les datas récupérées de la BDD
  // $obj peut valoir null car je veux pas hydrater un nouvel objet pour un seul user de la BDD
  protected function getAll($table, $obj = null){
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY RAND()');
    $req->execute();
    if($obj != null){
      //on crée la variable data qui
      //va contenir les données
      while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $objPath = 'Models\\'.$obj;
        // var contiendra les données sous forme d'objets
        $var[] = new $objPath($data);
      }
    }else{
      $var = $req->fetchAll();
    }
    $req->closeCursor();
    return $var;
  }

  public function getAllGroupBy($table, $obj = null){
    $this->getBdd();
    // la requete permet de regrouper les emails ensemble de maniere decroissantes et ID DESC permet de mettre les derniers message en premier
    $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY email DESC, id DESC');
    $req->execute();
    if($obj != null){
      while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $objPath = 'Models\\'.$obj;
        // var contiendra les données sous forme d'objets
        $var[] = new $objPath($data);
      }
    }else{
      $var = $req->fetchAll();
    }
    $req->closeCursor();
    return $var;
  }

  // récupère un item grace à son id
  protected function getOne($table, $obj, $id){
    $this->getBdd();
    $var = [];
    $req = self::$_bdd->prepare('SELECT * FROM ' .$table. ' WHERE id = ?');
    $req->execute(array($id));
    while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
      $objPath = 'Models\\'.$obj;
      $var[] = new $objPath($data);
    }
    return $var;
    $req->closeCursor();
  }

  public function find(int $id){
    return $this->requete('SELECT * FROM {$this->table} WHERE id = $id')->fetch();
  }

  /**
  * récupère un nombre précis d'items
  * @return array
  */
  protected function findLimit(int $nbre = 6): array {
    $sql = 'SELECT * FROM {$this->table}';
    // si aucun nbre est indiqué alors on laisse la valeur par défaut 6
    !$nbre ?: $sql .= ' LIMIT 0, $nbre';
    $req = $this->pdo->query($sql);
    $var = [];
    if($this->table == 'works'){
      while($row = $req->fetch(PDO::FETCH_ASSOC)){
        $objPath = 'Models\\'.$obj;
        $var[] = new $objPath($data);
      }
    }else{
      $var = $req->fetchAll();
    }
    $req->closeCursor();
    return $var;
  }
  
  /**
  * Supprime un item grâce à son id
  * @param integer $id
  * @return void
  */
  protected function delete($table, int $id): void{
    $this->getBdd();
    $req = self::$_bdd->prepare('DELETE FROM '. $table . ' WHERE id = :id');
    $req->execute(['id' => $id]);
    $req->closeCursor();
  }
  
  protected function createOne($table, $obj){
    $this->getBdd();
    $req = self::$_bdd->prepare('INSERT INTO '.$table.' (title, content, date) VALUES (?, ?, ?)');
    $req->execute(array($_POST['title'], $_POST['content'], date('d.m.Y')));
    $req->closeCursor();
  }
  
}