
///numeros lucky
function isLucky(num) {
  ////Convertimos a Texto para que se pueda dividir a la mitad la cadena
    num = num.toString();
  var mitad = num.length / 2;
  var m1 = 0;
  var m2 = 0;
  
  ///Suma primera mitad
  for (var i = 0; i < mitad; i++) {
    m1 += +num[i];
  }

  ///Suma segunda mitad
  for (var j = mitad; j < num.length; j++) {
    m2 += +num[j];
  }
  

  ///Verificamos si son iguales
  if (m1 != m2) {
    return false;
  } else {
    return true;
  }

}

console.log(isLucky(1230));
console.log(isLucky(239017));

