<?php
class model_game{
  private $modelGame;
  function __construct()  {
    $this->modelGame=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }


  function consultGame($id_game){
    $consult = $this->modelGame->prepare("SELECT * FROM juego j, version v WHERE( (j.id_game=?) AND (v.id_game=?))");
    $consult->execute(array($id_game, $id_game));
    return $consult->fetchall();

  }
}
 ?>
