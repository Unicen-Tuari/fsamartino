<?php
require_once('views/view_register.php');
require_once('model/model_register.php');

class controller_register{
  private $viewRegister;
  private $modelRegister;
  function __construct(){
    $this->viewRegister=new view_register();
    $this->modelRegister=new model_register();
  }

  function view_register($session){
    $this->viewRegister->get_Register($session);
  }

  private function validatePost($element){
    if (isset($element) && strlen(trim($element))>0)
      return true;
    else
      return false;
  }

  function insertNewUsr(){
    if ($this->validatePost($_POST['email']))
      $email=$_POST['email'];
    if ($this->validatePost($_POST['tagUsr']))
      $tagUsr=$_POST['tagUsr'];
    if ($this->validatePost($_POST['passwd'])){
      $passwd=$_POST['passwd'];
      $passCifrada=password_hash($passwd,PASSWORD_BCRYPT);
    }
    if ($this->validatePost($_POST['fullNameUsr']))
      $fullNameUsr=$_POST['fullNameUsr'];
    $this->modelRegister->insert_NewUser($email, $tagUsr, $passCifrada, $fullNameUsr);

  }

  function signIn(){
    if ($this->validatePost($_POST['tagUsr']))
      $tagUsr=$_POST['tagUsr'];
      $user=$this->modelRegister->get_user($tagUsr);
      if ($this->validatePost($_POST['passwd']))
        $passwd=$_POST['passwd'];
    if(password_verify($passwd, $user['passwd'])){
      session_start();
      $_SESSION['loged'] = TRUE;
      header("location: ..");
    }
  }
}



 ?>
