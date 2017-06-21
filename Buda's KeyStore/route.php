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
  if ($datos[configApp::$RESOURCE] == 'version'){
    if ($datos[configApp::$ACTION] == 'formulario'){
      $controllerVersion->view_version($session);
    }
    if ($datos[configApp::$ACTION] == 'insertVersion'){
      $controllerVersion->insert_version();
      $controllerVersion->view_version($session);
    }
    if ($datos[configApp::$ACTION] == 'modificar'){
    $controllerVersion->get_modificated_version($datos[configApp::$PARAMETERS],$session);
    }
    if ($datos[configApp::$ACTION] == 'modifyVersion'){
    $controllerVersion->modify_version($datos[configApp::$PARAMETERS],$session);
    }
  }
  if ($datos[configApp::$RESOURCE] == 'juego'){
    if ($datos[configApp::$ACTION] == 'detalles'){
      $controllerGame->showDetailedGame($datos[configApp::$PARAMETERS],$session);
    }
    if ($datos[configApp::$ACTION] == 'formulario'){
      $controllerFormGame->view_form_game($session);
    }
    if ($datos[configApp::$ACTION] == 'insertGame'){
      $controllerFormGame->insert_game();
      $controllerFormGame->view_form_game($session);
    }
  }
  if ($datos[configApp::$RESOURCE] == 'not_found'){
    $controllerNotFound->view_notFound($session);
  }
  if ($datos[configApp::$RESOURCE] == 'login'){
    if ($datos [configApp::$ACTION] == 'register'){
      $controllerRegister->view_register($session);
    }
    if ($datos [configApp::$ACTION] == 'insertNewUsr'){
      $controllerRegister->insertNewUsr();
      $controllerRegister->view_register($session);
    }
    if ($datos [configApp::$ACTION] == 'signin'){
      $controllerRegister->signIn();
    }
  }
  if ($datos [configApp::$RESOURCE] == 'sugerencia'){
    if ($datos [configApp::$ACTION] == 'editar'){
      $controllerSuggestion->view_suggestion($session);
  }
    if ($datos [configApp::$ACTION] == 'enviar'){
      $controllerSuggestion->insert_suggestion();
      echo "aca entro";
      //$controllerSuggestion->view_suggestion($session);
    }
  }
  if ($datos [configApp::$RESOURCE] == 'listGames'){
    $controllerListGames->show_listGames($session);
}
  if ($datos [configApp::$RESOURCE] == 'logout'){
    session_destroy();
    $controllerIndex->view_index($session);
  }
}
?>
