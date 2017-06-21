<?php
require_once('views/view_suggestion.php');

class controller_suggestion{
  private $viewSuggestion;
  function __construct(){
    $this->viewSuggestion=new view_suggestion();
  }
  function view_suggestion($session){
    $this->viewSuggestion->get_suggestion($session);
  }
}

 ?>
