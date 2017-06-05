<?php
require_once('view_index.php');

class controller_index{
  private $viewIndex;
  function __construct()
  {
    $this->viewIndex=new view_index();
  }

  function view_index(){
    $this->viewIndex->get_index();
  }
}
?>
