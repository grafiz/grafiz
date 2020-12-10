<?php
namespace Controllers;
use App\Form;
use Models\ContactManager;

class ControllerContact extends Controller
{
  private $_contactkManager;
  private $_contacts;
  private $_view;
  protected $file;
  protected $title;
  protected $page = 'Contact';
  protected $metaDescription = 'Vous pouvez me contacter pour un projet graphique, une collaboration ou toutes autres demandes';
  protected $heightHero;
  protected $heroTitle;
  public $msg = false;
  public $success = false;

  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = $this->page. parent::TEXT_COMMUN;
    $this->heightHero = $this->generateHeightHero();
    $this->heroTitle = $this->generateHeroTitle();
    if ($param) {
      $action = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action();
      }else{
        header('Location: /grafiz/contact');
      }
    }
    else {
      $this->index();
    }
  }

  public function index(){
    $this->render();
    // je supprime la notification après avoir envoyé le message pour qu'elle ne reste pas après avoir refresh la page
    unset($_SESSION['contact']);
  }

  public function send(){
    // apres avoir sécurisé le form, j'extrais les valeurs en variables
    $reponse = Form::isValid($_POST);
    if($reponse['success'] == true){
      $contactManager = new ContactManager();
      $contactManager->insertContact($reponse['post']);
      $contactManager->sendEmail($reponse['post']);
      $_SESSION['contact'] = $reponse;
      header('Location: /grafiz/contact#ancre-form');
    }else{$_SESSION['contact'] = $reponse;
      header('Location: /grafiz/contact#ancre-form');
    }
  }
}
