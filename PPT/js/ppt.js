"use strict"

let options = [
  'Piedra',
  'Papel',
  'Tijera'
];

let results = [
  'Ganaste', // 0
  'Perdiste', // 1
  'Empate' // 2
];

let option = document.getElementsByClassName('option');
//guardo en option el elemento con class option que me traera el elemento de la lista
let selectedOption = null;
let oponentOption = null;
let winner = null;
let congrats = 0;
let probabilidad = document.getElementById('probabilidad');
//guardo en probabilidad el elemento con id probabilidad
let probabilidades = [];

for (var i = 0 ; i < option.length; i++) {
  //agrego el evento click para cada posi de option
  option[i].addEventListener('click' , function(){
    selectedOption = this.getAttribute('value');
    //obtiene el valor del atributo que se clickeo
    document.getElementById('usuario').innerHTML = options[selectedOption];
    //Muestra en el html la opcion seleccionada 
    jugar();
  }) ;
}

function jugar() {
  if (probabilidad.checked && oponentOption != null) {
    probabilidades = [oponentOption];
    //Guardo la opcion elegida por el oponente en el primer lugar del arreglo probabilidades
    let newOption = Math.floor(Math.random() * 2);
    //Se realiza el random en que se elige entre el anterior elegido por el oponente y el resto
    if (newOption == 1) {
      //Si el random da 1, significa que se eligira entre los dos que no fueron elegidos
      switch (oponentOption) {
        //Guarda en el arreglo las dos que no fueron elegidas
        case 0:
          probabilidades['1'] = 1;
          probabilidades['2'] = 2;
          break;
        case 1:
          probabilidades['1'] = 0;
          probabilidades['2'] = 2;
          break;
        case 2:
          probabilidades['1'] = 1;
          probabilidades['2'] = 0;
          break;
      }
      let position = Math.floor((Math.random() * 2) + 1);
      // hago el math.random entre dos desde la posicion 1 y 2
      oponentOption = probabilidades[position];
    }
  } else {
    //Si no pasa nada de lo anterior, hago el math random con las mismas probabilidades para cada opcion, es el por default ya que oponentOption no debe ser null
    oponentOption = Math.floor(Math.random() * 3);
  }
  document.getElementById('oponente').innerHTML = options[oponentOption];
  switch (selectedOption) {
    //winner 0 usuario, winner 1 PC, winner 2 empate
    case '0':
    if (oponentOption == 0) {
      winner = 2;
    } else if (oponentOption == 1) {
      winner = 1;
      congrats = 0;
    }else if (oponentOption == 2) {
      winner = 0;
      congrats += 1;
    }
    break;
    case '1':
    if (oponentOption == 0) {
      winner = 0;
      congrats += 1;
    } else if (oponentOption == 1) {
      winner = 2;
    }else if (oponentOption == 2) {
      winner = 1;
      congrats = 0;
    }
    break;
    case '2':
    if (oponentOption == 0) {
      winner = 1;
      congrats = 0;
    } else if (oponentOption == 1) {
      winner = 0;
      congrats += 1;
    }else if (oponentOption == 2) {
      winner = 2;
    }
    break;
  }
  document.getElementById('result').innerHTML = results[winner];
  console.log(congrats);
  if (congrats == 3){
    //si gana 3 veces seguidas, muestra un alert de felicitaciones y pone congrats en 0
    alert('¡¡¡Ganashte treh washin!!!');
    congrats = 0;
  }
}
