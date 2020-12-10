<?php
namespace Controllers;
class ControllerTutos extends Controller
{
  private $_workManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = 'Tutos';
  protected $metaDescription = 'Découvrez mes tutoriels avec des exercices sur le graphisme et le Web Design en passant par des outils tel que Adobe Photoshop, Illustrator, InDesign, Adobe XD ainsi que l\'utilisation des langages Web HTML et CSS';
  protected $heightHero;
  protected $heroTitle;

  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    $this->description = 'toto le beau';
    $this->heightHero = $this->generateHeightHero();
    $this->heroTitle = $this->generateHeroTitle();
    if ($param) {
      $action = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action();
      }else{
        header('Location: /grafiz/tutos');
      }
    }else {
      $this->index();
    }
  }

  public function index(){
    $this->render();
    unset($_SESSION['contact']);
  }
}