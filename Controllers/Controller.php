<?php
namespace Controllers;
use PHPWee;
abstract class Controller
{   
    // fichier vue
    protected $file;
    // balise <title>
    protected $title;
    // le nom de la page qui servira a déterminer l'id de la balise <main> pr chaques pages
    protected $page;
    // balise <Meta description>
    protected $metaDescription;
    // la hauteur du Héro est plus haute sur la page d'accueil
    protected $heightHero;
    // le titre dans le héro de la page
    protected $heroTitle;
    protected const TEXT_COMMUN = ' | Grafiz - graphic designer Paris';

 
    /* Méthode abstraite correspondant à l'action par défaut
    * Oblige les classes dérivées à implémenter cette action par défaut
    */
    protected abstract function index();
    

    /**
    * Définit la hauteur du héro qui est la même sur toutes les pages sauf celle de la 'home'
    * @return string
    */
    public function generateHeightHero(): string{
        return $heightHero = ($this->page == 'Accueil') ? 'is-large' : 'is-medium';
    }


    /**
    * Définit le titre principal dans le header selon le controlleur en question
    * @return string
    */
    public function generateHeroTitle($data = null): string{
        if($this->page !== 'Accueil'){
            if($this->page !== 'Show'){
                // sinon c'est la page About ou Contact
                 if(($this->page == 'Works') || ($this->page == 'Tutos')){
                    $span = '<span>my</span>';
                }
                    $hero = 'commons/hero/hero.php';
            }else{
                $work = $data['work'];
                $hero = 'commons/hero/heroWork.php';
            }
        // sinon c'est le hero de la page d'accueil
        }else{
            $hero = 'commons/hero/heroAccueil.php';
        }
        ob_start();
        require VIEW. $hero;
        return $heroTitle = ob_get_clean();
    }


    // crée une fonction qui va générer et afficher la vue de tous les articles
    public function render($data = null){

        $this->heightHero = $this->generateHeightHero();
        $this->heroTitle = $this->generateHeroTitle($data);
        //définir le contenu à envoyer
        $content = $this->generateFile($this->file, $data);
        //template
        $view = $this->generateFile('Views/template.php', array('title' => $this->title, 'content' => $content));
  
        echo $view;
    }


    // génère la vue sans header et ni footer 
    public function renderSimple($data = null){
        $content = $this->generateFile($this->file, $data);
        //template
        $view = $this->generateFile('Views/templateSimple.php', array('content' => $content));
        echo $view;
    }
    

    private function generateFile($file, $data = null){
        if (file_exists($file)) {
            if($data != null){
                extract($data);
            }  
        }else{
            throw new \Exception('Fichier '.$file.' introuvable', 1);
        }
        //commencer la temporisation
        ob_start();
        require $file;
        //arreter la temporisation
        return ob_get_clean();
    }
    

    private function generateFileSimple($file){
        if (file_exists($file)) {
            require $file;
        }
        else {
            throw new \Exception('Fichier '.$file.' introuvable', 1);
        }
    }
    
}