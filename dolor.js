var num=Math.floor(Math.random()*(123-97)) + 97;
console.log(num);

var letra="";
//Pasar de número de la lista a carácter
letra=String.fromCharCode(num);
console.log(letra);
var introducirletra=prompt("Intenta introducir la letra correcta en minúscula");
var intentos=5;
var contador=1;
while (intentos>contador && letra!=introducirletra) {
  introducirletra=prompt("Te quedan "+(intentos-contador)+" intentos");
  contador++;
}
if (introducirletra==letra) {
  alert("!!FELICIDADES MARINERO¡¡");
} else {
  contador=intentos;
  alert("Intentalo de nuevo");
}
