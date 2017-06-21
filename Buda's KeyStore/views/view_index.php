<?php
require_once('libs/Smarty.class.php');

class view_index{
  private $view;
  private $baseDir;
  function __construct(){
    $this->view=new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function get_index($session){
    $this->view->assign('session',$session);
    $this->view->assign('baseDir',$this->baseDir);
    $this->view->display('index.tpl');
  }
}
?>
