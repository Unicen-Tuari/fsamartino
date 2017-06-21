<?php
class model_register{
  private $modelRegister;
  function __construct(){
    $this->modelRegister=new PDO('mysql:host=localhost;'. 'dbname=BudaStore; charset=utf8','root','');
  }

  function insert_NewUser($email, $tagUsr, $passwd, $fullNameUsr){
    $insertar=$this->modelRegister->prepare("INSERT INTO usuario(email,tagUsr, passwd,fullNameUsr) VALUES (?,?,?,?)");
    $insertar->execute(array($email, $tagUsr, $passwd, $fullNameUsr));
  }

  function get_user($pkUsr){
    $consult=$this->modelRegister->prepare("SELECT * FROM usuario WHERE (tagUsr=?)");
    $usuario=$consult->execute(array($pkUsr));
    return $consult->fetch();

  }
}

 ?>
