<?php
namespace Controllers;
use Views\View;
class ControllerAbout extends Controller
{
  private $_workManager;
  private $_view;
  protected $title;
  protected $page = 'About';
  protected $metaDescription = 'Découvrez mes domaines d\'expertises autour du graphisme, l\'illustration et l\'intégration Web';
  protected $heightHero;
  protected $heroTitle;
  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    if ($param) {
      $action = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action();
      }else{
        header('Location: /grafiz/about');
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
