<?php
require_once('libs/Smarty.class.php');

class view_notFound{
  private $viewNotFound;
  private $baseDir;
  function __construct(){
    $this->viewNotFound=new Smarty();
    $this->baseDir= 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function get_notFound($session){
    $this->viewNotFound->assign('session',$session);
    $this->viewNotFound->assign('baseDir',$this->baseDir);
    $this->viewNotFound->display('not_found.tpl');
  }
}


 ?>
