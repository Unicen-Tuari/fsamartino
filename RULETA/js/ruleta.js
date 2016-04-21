"use strict";

var saldo = 100;
var numeroApuesta= -1;
var numeroRuleta= -1;

function aumentarSaldo(){
  numeroApuesta = parseInt(document.getElementById('numero').value);
  saldo -= 5;
  if (numeroApuesta === 0){
    saldo +=10;
  }
  if ((numeroApuesta >=1) && (numeroApuesta<6)){
    saldo +=5;
  }
  if ((numeroApuesta>=6) && (numeroApuesta<10)){
    saldo+=3;
  }
}

function disminuyeSaldo(){
  saldo -=5;
}

function spinRuleta (){
  return Math.floor((Math.random()*9));
}

function tirarRuleta(){
  if (saldo < 5){
    alert('Tu saldo es insuficiente para realizar esta apuesta');
    return;
  }
  numeroApuesta = document.getElementById('numero').value;
  if ((numeroApuesta >= 10) || (numeroApuesta < 0) || (numeroApuesta === "")){
    alert('EL NUMERO DEBE ESTAR ENTRE 0 Y 9');
    return;
  }

  numeroApuesta = parseInt(document.getElementById('numero').value);
  numeroRuleta = parseInt(spinRuleta());

  if (numeroApuesta === numeroRuleta) {
    alert('Ganaste!');
    aumentarSaldo();
    document.getElementById('saldo').innerHTML= "$" + saldo;
  }
  else{
    alert('Perdiste');
    disminuyeSaldo();
    document.getElementById('saldo').innerHTML="$" + saldo;
  }
  document.getElementById('resultado').innerHTML= numeroRuleta;
}
