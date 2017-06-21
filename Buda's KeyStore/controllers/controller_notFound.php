<?php
require_once('views/view_notfound.php');

class Controller_notFound{
  private $viewNotFound;
  function __construct(){
    $this->viewNotFound=new view_notFound();
  }
  function view_notFound($session){
    $this->viewNotFound->get_notFound($session);
  }
}

 ?>
