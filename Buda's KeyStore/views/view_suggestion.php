<?php
require_once('libs/Smarty.class.php');

class view_suggestion{
  private $viewSuggestion;
  private $baseDir;
  function __construct(){
    $this->viewSuggestion=new Smarty();
    $this->baseDir='http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  function get_suggestion($session){
    $this->viewSuggestion->assign('session',$session);
    $this->viewSuggestion->assign('baseDir',$this->baseDir);
    $this->viewSuggestion->display('suggestion.tpl');
  }
}

 ?>
