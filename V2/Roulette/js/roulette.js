"use strict";
var cantidadNumeros;
var ruleta={};

function NumerosRuleta(){
  var i;
  var j= cantidadNumeros;
  for( i=0; i<j; i++){
    ruleta.valor=i[i]
  }
}

$("#btnllenarRuleta").on("click", function (){
    cantidadNumeros = $("#llenarRuleta").val();
    NumerosRuleta();
  }
);
