<?php
require_once('controller_index.php');
require_once('config/config_app.php');
$controllerIndex=new controller_index();
$controllerIndex->view_index();
var_dump($_REQUEST);
?>
