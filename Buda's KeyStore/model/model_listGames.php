<?php

class model_listGames{
  private $model_listGames;
  function __construct(){
    $this->modelListGames=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }
  function consultAllGames(){
    $consult=$this->modelListGames->prepare("SELECT * FROM juego");
    $consult->execute();
    return $consult->fetchall();
  }
}

 ?>
