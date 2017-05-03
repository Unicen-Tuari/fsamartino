"use strict"

let options = [
  'Piedra',
  'Papel',
  'Tijera'
];

let option = document.getElementsByClassName('option');
let selectedOption = null;
let oponentOption = null;
let winner = null;

for (var i = 0 ; i < option.length; i++) {
   option[i].addEventListener('click' , function(){
     selectedOption = this.getAttribute('value');
     document.getElementById('opt').innerHTML = options[selectedOption];
     jugar();
   }) ;
}

function jugar() {
  winner = 'asd';
  oponentOption = Math.floor(Math.random() * 3);
  document.getElementById('oponente').innerHTML = options[oponentOption];
  switch (selectedOption) {
    case '0':
      if (oponentOption == 0) {
        winner = 2;
      } else if (oponentOption == 1) {
        winner = 1;
      }else if (oponentOption == 2) {
        winner = 0;
      }
      break;
    case '1':
      if (oponentOption == 0) {
        winner = 0;
      } else if (oponentOption == 1) {
        winner = 2;
      }else if (oponentOption == 2) {
        winner = 1;
      }
      break;
    case '2':
      if (oponentOption == 0) {
        winner = 1;
      } else if (oponentOption == 1) {
        winner = 0;
      }else if (oponentOption == 2) {
        winner = 2;
      }
      break;
  }
  document.getElementById('result').innerHTML = winner;
}
