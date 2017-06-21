<?php
require_once('views/view_version.php');
require_once('model/model_version.php');

class controller_version{
  private $viewVersion;
  private $modelVersion;
  function __construct(){
    $this->viewVersion=new view_version();
    $this->modelVersion=new model_version();
  }

  function view_version($session){
    if (isset($_SESSION['loged'])){
      $this->viewVersion->get_version($session);
    }
    else{
      header("location: ../not_found");
      die();
    }
  }


  function get_modificated_version($idVersion,$session){
    $this->viewVersion->get_modify_version($idVersion,$session);
  }
  public function modify_version($idVersion){
    if ($this->validatePost($_POST['nameVersion']))
      $nameVersion=$_POST['nameVersion'];
    if ($this->validatePost($_POST['price']))
      $price=$_POST['price'];
    if ($this->validatePost($_POST['online']))
      $online=$_POST['online'];
    if ($this->validatePost($_POST['players']))
      $players=$_POST['players'];
    if ($this->validatePost($_POST['freeCoins']))
        $freeCoins=$_POST['freeCoins'];
        $this->modelVersion->modifyVersion($nameVersion, $price, $online, $players, $freeCoins, $idVersion);
        header("Location: ../../juego/detalles/2");
  }

  private function validatePost($element){
    if (isset($element) && strlen(trim($element))>0)
      return true;
    else
      return false;
  }

  public function insert_version(){
    if ($this->validatePost($_POST['id_game']))
      $id_game=$_POST['id_game'];
    if ($this->validatePost($_POST['nameVersion']))
      $nameVersion=$_POST['nameVersion'];
    if ($this->validatePost($_POST['price']))
      $price=$_POST['price'];
    if ($this->validatePost($_POST['online']))
      $online=$_POST['online'];
    if ($this->validatePost($_POST['players']))
      $players=$_POST['players'];
    if ($this->validatePost($_POST['freeCoins']))
        $freeCoins=$_POST['freeCoins'];

    $this->modelVersion->insertVersion($id_game, $nameVersion, $price, $online, $players, $freeCoins);
    }
  }
?>
