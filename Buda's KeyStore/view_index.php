<?php
require_once('libs/Smarty.class.php');

class view_index{
  private $view;
  function __construct()
  {
    $this->view=new Smarty();
  }

  function get_index(){
    $this->view->display('index.tpl');
  }
}
?>
