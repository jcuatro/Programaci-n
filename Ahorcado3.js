/*function comprobar(introducirletra,letrasusadas){
  for(i=0;i<letras_usadas.length;i++){
    if(introducirletra==letrasusadas[i]){
      return true;
    }
  }
}*/
//variables-Arrays
var palabras=["urnas","independencia","generalidad","peluquin","tuerto","perro","almanaque","tortuga","clase","mesa","ira"];
var letrausada=[];
var numero;
var acertadas=-1;
const INTENTOS=6;
var contador=1;
var encontrada=false;
var espacios= [];
var random = Math.round(Math.random()*palabras.length);
var palabraaleatoria = palabras[random];
var letras = [];
var ceros = 1;
console.log(palabraaleatoria);


for (var i=0;i<palabraaleatoria.length-1;i++) {
  letras[i]=palabraaleatoria.charAt(i);
  numero=i;
}
var espacios = (palabraaleatoria.length-1);

for (var j=0;j<palabraaleatoria.length-1;j++) {
  espacios[j]="0";
}

while (contador>INTENTOS && ceros!=0) {

  var letra=prompt("Te quedan"+(INTENTOS-contador)+" intentos");
  while (isNaN(letras)==false) {
    letra=prompt("Introduce una letra");
  }
  for (let i=0; i<= letrausada.length-1; i++){
    if (letra == letrausada[i])
    letrausada[i]=letra;
    encontrada=true;
  }
}
  letras.push(letrausada);
  for (var i=0; i<letras.length;i++) {
    if (letrausada==letras[i]) {
      espacios[i]=letrausada;
      encontrada=true;
      acertadas++;
    }
  }
  if(encontrada!=true){
    contador++;
    console.log("Al menos lo has intentado");
  }
  encontrada=false
  if(numero==acertadas){
    alert("Has ganado, enhorabuena, bueno tecnicamente no has ganado nada pero..., eso felicidades, la palabra era: "+palabraaleatoria+" te han sobrado "+(INTENTOS-contador)+" intentos");
  }
