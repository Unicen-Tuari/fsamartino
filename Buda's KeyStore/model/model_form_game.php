<?php
class model_form_game{
  private $modelFormGame;
  function __construct()  {
    $this->modelFormGame=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }

  function insertGame($name_game, $category, $fabricator, $description){
    $insert = $this->modelFormGame->prepare("INSERT INTO juego(name_game, category, fabricator, description)
                                             VALUES(?,?,?,?)");
    $insert->execute(array($name_game, $category, $fabricator, $description));
  }
}

 ?>
