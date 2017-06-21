<?php
require_once('views/view_suggestion.php');
require_once('model/model_suggestion.php');


class controller_suggestion{
  private $viewSuggestion;
  private $modelSuggestion;
  function __construct(){
    $this->viewSuggestion=new view_suggestion();
    $this->modelSuggestion=new model_suggestion();
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
  private function validatePost($element){
    if (isset($element) && strlen(trim($element))>0)
      return true;
    else
      return false;
  }

  public function insert_suggestion(){
    if ($this->validatePost($_POST['tagUsr']))
      $tagUsr=$_POST['tagUsr'];
    if ($this->validatePost($_POST['typeSuggest']))
      $typeSuggest=$_POST['typeSuggest'];
    if ($this->validatePost($_POST['textSuggest']))
      $textSuggest=$_POST['textSuggest'];
        $this->modelSuggestion->insertSuggestion($tagUsr, $typeSuggest, $textSuggest);
        header("Location: ../index");
  }
}

 ?>
