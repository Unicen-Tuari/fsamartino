"use strict";
var cantidadNumeros;
var apuestas={};

function randomIntFromInterval(min,max){
    return Math.floor(Math.random()*(max-min+1)+min);
}

$("#btnllenarRuleta").on("click", function (){
    cantidadNumeros = $("#llenarRuleta").val();
    var i = 0;
    for (i=0; i<cantidadNumeros; i++){
    	var numero = "<div class='numero-ruleta' numero="+i+">"+i+"</div>";
		$('.contenedor-ruleta').append(numero);
    }
 }
);

$('.contenedor-ruleta').on('click', '.numero-ruleta', function() {
	var numero = $(this).attr('numero');
	console.log(numero);
	apuestas[numero] = '10';
 }
);

$('#ver-json').on('click',function(){
	console.log(apuestas);
 }
);

$('#apostar').on('click',function(){
	var resultadoRuleta = randomIntFromInterval(0,cantidadNumeros);
	if ((apuestas[resultadoRuleta] == 0) || (apuestas[resultadoRuleta] == undefined) || (apuestas[resultadoRuleta] == '')){
		console.log('perdiste');
	}
  else{
		console.log('ganaste');
	}
 }
);
