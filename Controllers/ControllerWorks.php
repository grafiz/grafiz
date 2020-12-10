<?php
namespace Controllers;
use Models\WorksManager;

class ControllerWorks extends Controller
{
  private $_workManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = 'Works';
  protected $metaDescription = 'Découvrez mon portfolio autour du graphisme, du web design et du digital painting. Mon Book contient diverses réalisations tel que la création d\'identité de marque, de packaging, de covering, de compositing, de design d\'interface Web (UI Design) et de digital painting';
  protected $heightHero;
  protected $heroTitle;

  public function __construct($params){
    $this->title = $this->page. parent::TEXT_COMMUN;
    if($params){
        $action = array_shift($params);
        $id = array_shift($params);
        //  on affiche le works seulement si on est sur que l'id a été précisé dans l'URL
        if(method_exists($this, $action) && !empty($id)){
        $this->$action($id);
        }else{
          header('Location: /grafiz/works');
        }
      
    }else{
      $this->index();
    }
}

  public function index(){
    // affiche tous les works 
    $this->_workManager = new WorksManager();
    $works = $this->_workManager->getWorks();
    $this->file = 'Views/viewWorks.php';
    $this->render(array('works' => $works), 'Views/template.php');
    unset($_SESSION['contact']);
  }

  public function show($id){
    // affiche un work avec son id
    $this->_workManager = new WorksManager();
    // pr avoir accès direct au tableau sans passer par la clé [0]
    $work = $this->_workManager->getWork($id)[0];
    // dans le cas ou l'id de la BDD n'existe pas on redirige vers la page works sinon on affiche le work en question
    if($work !== NULL){
      $this->title = $work->categorie.' | '.$work->nom. parent::TEXT_COMMUN;
      $this->metaDescription = $work->description[0];
      $this->page = 'Show';
      $this->file = 'Views/viewShow.php';
      $this->render(array('work' => $work));
    }else{
      header('Location: /grafiz/works');
    }

  }
}
