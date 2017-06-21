<?php
require_once('views/view_listGames.php');
require_once('model/model_listGames.php');


class controller_listGames{
  private $viewListGames;
  private $modelListGames;
  function __construct(){
    $this->viewListGames=new view_listGames();
    $this->modelListGames=new model_listGames();
  }

  function show_listGames($session){
    $juegos=$this->modelListGames->consultAllGames();
    $this->viewListGames->get_listGames($session,$juegos);
  }
}
 ?>
