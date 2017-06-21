<?php
require_once('controllers/controller_index.php');
require_once('controllers/controller_version.php');
require_once('controllers/controller_game.php');
require_once('controllers/controller_form_game.php');
require_once('controllers/controller_notFound.php');
require_once('controllers/controller_register.php');
require_once('controllers/controller_suggestion.php');
require_once('controllers/controller_listGames.php');
require_once('config/config_app.php');

function parsearUrl($url){
  $arrData = explode("/",$url);
  if (isset($arrData[0])){
  $arrInfo[configApp::$RESOURCE] = $arrData[0];
  }
  if(sizeof($arrData)>1){
      if (isset($arrData[1])){
        $arrInfo[configApp::$ACTION] = $arrData[1];
      }
      if (isset($arrData[2])){
        $arrInfo[configApp::$PARAMETERS] = $arrData[2];
      }
    }
  return $arrInfo;
}
session_start();
if (isset($_SESSION['loged'])){
  $session=TRUE;
}
else{
  $session=FALSE;
}
$datos=parsearUrl($_REQUEST[configApp::$ACTION]);
$controllerIndex=new controller_index();
$controllerVersion=new controller_version();
$controllerGame=new controller_game();
$controllerFormGame=new controller_form_game();
$controllerNotFound=new controller_notFound();
$controllerRegister=new controller_Register();
$controllerSuggestion=new controller_suggestion();
$controllerListGames=new controller_listGames();
if($_GET[configApp::$ACTION] == ''){
  $controllerIndex->view_index($session);
}
else{
  if ($datos[configApp::$RESOURCE] == configApp::$VERSION){
    if ($datos[configApp::$ACTION] == configApp::$FORM){
      $controllerVersion->view_version($session);
    }
    if ($datos[configApp::$ACTION] == configApp::$INSERT_VERSION){
      $controllerVersion->insert_version();
      $controllerVersion->view_version($session);
    }
    if ($datos[configApp::$ACTION] == configApp::$MODIFY){
    $controllerVersion->get_modificated_version($datos[configApp::$PARAMETERS],$session);
    }
    if ($datos[configApp::$ACTION] == configApp::$MODIFY_VERSION){
    $controllerVersion->modify_version($datos[configApp::$PARAMETERS],$session);
    }
  }
  if ($datos[configApp::$RESOURCE] == configApp::$GAME){
    if ($datos[configApp::$ACTION] == configApp::$DETAILS){
      $controllerGame->showDetailedGame($datos[configApp::$PARAMETERS],$session);
    }
    if ($datos[configApp::$ACTION] == configApp::$FORM){
      $controllerFormGame->view_form_game($session);
    }
    if ($datos[configApp::$ACTION] == configApp::$INSERT_GAME){
      $controllerFormGame->insert_game();
      $controllerFormGame->view_form_game($session);
    }
  }
  if ($datos[configApp::$RESOURCE] == configApp::$NOT_FOUND){
    $controllerNotFound->view_notFound($session);
  }
  if ($datos[configApp::$RESOURCE] == configApp::$LOG_IN){
    if ($datos [configApp::$ACTION] == configApp::$REGISTER){
      $controllerRegister->view_register($session);
    }
    if ($datos [configApp::$ACTION] == configApp::$INSERT_NEW_USER){
      $controllerRegister->insertNewUsr();
      $controllerRegister->view_register($session);
    }
    if ($datos [configApp::$ACTION] == configApp::$SIGN_IN){
      echo "aca entro";
      $controllerRegister->signIn();
    }
  }
  if ($datos [configApp::$RESOURCE] == configApp::$SUGGESTION){
    if ($datos [configApp::$ACTION] == configApp::$EDIT){
      $controllerSuggestion->view_suggestion($session);
  }
    if ($datos [configApp::$ACTION] == configApp::$SEND){
      $controllerSuggestion->insert_suggestion();
      $controllerSuggestion->view_suggestion($session);
    }
  }
  if ($datos [configApp::$RESOURCE] == configApp::$LIST_GAMES){
    $controllerListGames->show_listGames($session);
}
  if ($datos [configApp::$RESOURCE] == configApp::$LOG_OUT){
    session_destroy();
    $controllerIndex->view_index($session);
  }
}
?>
