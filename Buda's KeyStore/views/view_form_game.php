<?php
require_once('libs/Smarty.class.php');
class view_form_game{
  private $baseDir;
  private $viewFormGame;

  function __construct(){
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
    $this->viewFormGame=new Smarty();
  }
  function get_form_game($session){
    $this->viewFormGame->assign('session',$session);
    $this->viewFormGame->assign('baseDir',$this->baseDir);
    $this->viewFormGame->display('form_games.tpl');
  }
}


 ?>
