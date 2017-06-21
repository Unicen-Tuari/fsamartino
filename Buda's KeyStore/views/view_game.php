<?php
require_once('libs/Smarty.class.php');
class view_Game{
  private $viewGame;
  private $baseDir;
  function __construct(){
    $this->viewGame=new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  function get_game($details, $session){
    $this->viewGame->assign('session',$session);
    $this->viewGame->assign('baseDir',$this->baseDir);
    $this->viewGame->assign('container', $details);
    $this->viewGame->display('game_details.tpl');

  }
}

 ?>
