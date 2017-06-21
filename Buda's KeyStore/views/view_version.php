<?php
require_once('libs/Smarty.class.php');

class view_version{
  private $viewVersion;
  private $baseDir;
  function __construct(){
    $this->viewVersion=new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function get_version($session){
    $this->viewVersion->assign('session',$session);
    $this->viewVersion->assign('baseDir',$this->baseDir);
    $this->viewVersion->display('form_version.tpl');
  }

  function get_modify_version($idVersion,$session){
    $this->viewVersion->assign('session',$session);
    $this->viewVersion->assign('idVersion',$idVersion);
    $this->viewVersion->assign('baseDir',$this->baseDir);
    $this->viewVersion->display('modify_version.tpl');
  }
}
?>
