<?php
require_once('views/view_suggestion.php');

class controller_suggestion{
  private $viewSuggestion;
  function __construct(){
    $this->viewSuggestion=new view_suggestion();
  }
  function view_suggestion($session){
    if (isset($_SESSION['loged'])){
        $this->viewSuggestion->get_suggestion($session);
    }
    else{
      header("location: ../not_found");
      die();
    }
  }
}

 ?>
