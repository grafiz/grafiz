<?php
namespace Models;
class Work
{
    public $id;
    public $categorie;
    public $nom;
    public $client;
    public $description;
    public $icon_path;
    public $imgs_path;
    public $img_show = false;
    public function __construct(array $data){
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);
            $this->$method($value);
        }
    }
    public function setId(int $id){$this->id = $id;}
    public function setCategorie(string $categorie){$this->categorie = $categorie;}
    public function setNom(string $nom){$this->nom = $nom;}
    public function setClient(string $client){$this->client = $client;}
    public function setDescription(string $description){
        // si la chaine commence par un premier 'tiret' alors explode va renvoyer une valeur vide comme 1ère clé du tableau
        $li = explode('- ', $description);
        $this->description = $li;
    }
    /*** définie le chemin des icones logiciels */
    public function setIcon_path(string $icons){  
        if($icons) {
            // même si il n'existe pas de virgules explode permet de retourner la seule icone dans un array
            $arrayIcons = explode(', ', $icons);
            // si il existe plusieurs icons on rajoute une clé dans l'array 
                foreach($arrayIcons as $key => $icon){
                    $this->icon_path[] = array(
                        'name' => $icon,
                        'path' => ASSETS. '/img/OPTIMIZED/icons/'. $icon. '.svg'
                    );
                }
        }
    }
    /*** récupère la 1ère image */
    public function getFirst_img(){
        return $this->imgs_path[0];
    }
    /*** définie le chemin absolue des imgs */
    public function setImgs_path(string $paths){
        $url = ASSETS . '/img/OPTIMIZED/';
        $virgule = strpos($paths, ',');
        if ($virgule === false){
            $arr[] = $url . $paths;
            $this->imgs_path = $arr;
            // sinon il y a plusieurs imgs   
        }else{
            $arrayImgs = (explode(', ', $paths));
            foreach($arrayImgs as $key => $values){
                $arr[] = $url . $values;
            }
            $this->imgs_path = $arr;
        } 
    }
    public function setImg_show($path){
        $this->img_show = ASSETS . '/img/OPTIMIZED/' . $path;
    }
}