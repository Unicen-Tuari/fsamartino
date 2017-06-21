<?php
class model_version{
  private $modelVersion;
  function __construct()  {
    $this->modelVersion=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }
  function insertVersion($id_game, $nameVersion, $price, $online, $players, $freeCoins){
    $insert = $this->modelVersion->prepare("INSERT INTO version(id_game, nameVersion, price, online, players, freeCoins)"."VALUES (?,?,?,?,?,?)");
    $insert->execute(array($id_game, $nameVersion, $price, $online, $players, $freeCoins));
  }
  function modifyVersion($nameVersion, $price, $online, $players, $freeCoins,$idVersion){
    $modify = $this->modelVersion->prepare("UPDATE version SET nameVersion = ? WHERE id_version = ?");
    $modify->execute(array($nameVersion, $idVersion));
    $modify = $this->modelVersion->prepare("UPDATE version SET price = ? WHERE id_version = ?");
    $modify->execute(array($price, $idVersion));
    $modify = $this->modelVersion->prepare("UPDATE version SET online = ? WHERE id_version = ?");
    $modify->execute(array($online, $idVersion));
    $modify = $this->modelVersion->prepare("UPDATE version SET players = ? WHERE id_version = ?");
    $modify->execute(array($players, $idVersion));
    $modify = $this->modelVersion->prepare("UPDATE version SET freeCoins = ? WHERE id_version = ?");
    $modify->execute(array($freeCoins, $idVersion));
  }
}

 ?>
