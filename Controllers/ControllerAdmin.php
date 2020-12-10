<?php
namespace Controllers;
use Models\ContactManager;
use Models\UserManager;
use App\Form;



class ControllerAdmin extends Controller
{
  // private $msgAdmin = "";
  public $notification;
  private $_loginManager;
  private $_view;
  protected $file;
  protected $title;
  protected $page = 'Admin';
  protected $Description;
  protected $heightHero;
  protected $heroTitle;
  

  public function __construct($param){
    $this->file = 'Views/view'. $this->page.'.php';
    $this->title = 'Grafiz - Admin';
    $this->heroTitle = $this->generateHeroTitle();

    if ($param){
      $action = array_shift($param);
      $id = array_shift($param);
      if(method_exists($this, $action)){
        $this->$action($id);
      }
    }else{
      $this->index();
    }
  }


  
  public function index(){
    // $this->login();

    $this->renderSimple();
    unset($_SESSION['contact']);
  }





  // si le formulaire a été soumis
  public function login(){

    if(Form::isValid($_POST)){
     
      $this->_loginManager = new UserManager();
      $admin = $this->_loginManager->getUser();

      extract($admin[0]);

      $isPseudoCorrect = ($_POST['pseudo'] === $pseudo) ? true : false;
      $isPassCorrect = password_verify($_POST['pass'], $pass);

      if($isPseudoCorrect && $isPassCorrect){

        $contactManager = new ContactManager();
  
        $contacts = $contactManager->getContactsByEmail();
        $_SESSION['contacts'] = $contacts;

        $_SESSION['pseudo'] = $_POST['pseudo'];
        $_SESSION['msg-admin'] = 'Bonjour Grafiz vous êtes connecté';
        $_SESSION['color-admin'] = 'is-primary';
        
        // je redirige vers la page Admin pr éviter le renvoi du formulaire quand j'actualise la page
        header('Location: /grafiz/admin');
        // exit;
   
      }else{
      
        
        $_SESSION['msg-admin'] = 'Mauvais identifiant ou mot de passe';
        $_SESSION['color-admin'] = 'is-danger';
        header('Location: /grafiz/admin');
     
      }

    }
    
    $this->renderSimple();
    
  }

  public function delete($id){
    $contactManager = new ContactManager();
    $contactManager->deleteContact($id);

    // après avoir suppr en BDD, je mets à jour la session car c'est elle qui contient tous les contacts 
    $contacts = $contactManager->getContactsByEmail();
    $_SESSION['contacts'] = $contacts;

   
    
    // je redirige vers la page Admin pr éviter le renvoi du formulaire quand j'actualise la page
    header('Location: /grafiz/admin');
  }




  
}

