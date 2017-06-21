<?php
require_once('libs/Smarty.class.php');

class view_register{
  private $viewRegister;
  private $baseDir;

  function __construct(){
    $this->viewRegister=new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  function get_Register($session){
    $this->viewRegister->assign('session',$session);
    $this->viewRegister->assign('baseDir',$this->baseDir);
    $this->viewRegister->display('register.tpl');
  }
}


 ?>
