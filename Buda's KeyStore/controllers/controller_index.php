<?php
require_once('views/view_index.php');

class controller_index{
  private $viewIndex;
  function __construct(){
    $this->viewIndex=new view_index();
  }

  function view_index($session){
    if (isset($_SESSION['loged'])){
      $this->viewIndex->get_index($session);
    }
    else{
      header("location: http://localhost/proyect/fsamartino/Buda's%20KeyStore/not_found");
      die();
    }
  }
}
?>
