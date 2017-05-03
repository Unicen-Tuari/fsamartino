"use strict"

let options = [
  'Piedra',
  'Papel',
  'Tijera'
];

let results = [
  'Ganaste',
  'Perdiste',
  'Empate'
];

let option = document.getElementsByClassName('option');
let selectedOption = null;
let oponentOption = null;
let winner = null;
let congrats = 0;
let probabilidad = document.getElementById('probabilidad');
let probabilidades = [];

for (var i = 0 ; i < option.length; i++) {
  option[i].addEventListener('click' , function(){
    selectedOption = this.getAttribute('value');
    document.getElementById('opt').innerHTML = options[selectedOption];
    jugar();
  }) ;
}

function jugar() {
  if (probabilidad.checked && oponentOption != null) {
    probabilidades = [oponentOption];
    let newOption = Math.floor(Math.random() * 2);
    if (newOption == 1) {
      switch (oponentOption) {
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
      oponentOption = probabilidades[position];
    }
  } else {
    oponentOption = Math.floor(Math.random() * 3);
  }
  document.getElementById('oponente').innerHTML = options[oponentOption];
  switch (selectedOption) {
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
    alert('Ganaste!');
    congrats = 0;
  }
}
