<?php
require_once('libs/Smarty.class.php');

class view_listGames{
  private $viewListGame;
  private $baseDir;
  function __construct(){
    $this->viewListGame=new Smarty();
    $this->baseDir= 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  function get_listGames($session,$juegos){
    $this->viewListGame->assign('session', $session);
    $this->viewListGame->assign('juegos', $juegos);
    $this->viewListGame->assign('baseDir', $this->baseDir);
    $this->viewListGame->display('listGames.tpl');
  }
}

?>
