<?php
require_once('model/model_game.php');
require_once('views/view_game.php');

class controller_game{
  private $modelGame;
  private $viewGame;
  function __construct() {
    $this->modelGame=new model_game();
    $this->viewGame=new view_game();
  }
  function getDetailedGame($id_game){
    $consult=$this->modelGame->consultGame($id_game);
    return $consult;
  }

  function showDetailedGame ($id_game,$session){
    $container=$this->getDetailedGame($id_game);
    $this->viewGame->get_game($container,$session);
  }
}

?>
