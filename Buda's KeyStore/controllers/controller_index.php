<?php
require_once('views/view_index.php');

class controller_index{
  private $viewIndex;
  function __construct(){
    $this->viewIndex=new view_index();
  }

  function view_index($session){
      $this->viewIndex->get_index($session);  
  }
}
?>
