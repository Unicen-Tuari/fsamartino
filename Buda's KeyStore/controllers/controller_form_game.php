<?php
require_once('model/model_form_game.php');
require_once('views/view_form_game.php');

class controller_form_game{
  private $viewFormGame;
  private $modelFormGame;
  function __construct(){
    $this->viewFormGame=new view_form_game();
    $this->modelFormGame=new model_form_game();
  }

  function view_form_game($session){
    $this->viewFormGame->get_form_game($session);
  }

  private function validatePost($element){
    if (isset($element) && strlen(trim($element))>0)
      return true;
    else
      return false;
  }

  function insert_game(){
    if ($this->validatePost($_POST['name_game']))
      $name_game=$_POST['name_game'];
    if ($this->validatePost($_POST['category']))
      $category=$_POST['category'];
    if ($this->validatePost($_POST['fabricator']))
      $fabricator=$_POST['fabricator'];
    if ($this->validatePost($_POST['description']))
      $description=$_POST['description'];
    $this->modelFormGame->insertGame($name_game, $category, $fabricator, $description);

  }
}



 ?>
