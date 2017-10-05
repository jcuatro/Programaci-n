var numA1 =Math.round((Math.random()*100)+1);
console.log(numA1);
var cosa=0;


while(cosa!=numA1){
  cosa=prompt("Introduce un número entre 1 y 100");
 if (cosa<numA1) {alert("Te quedaste corto");}
 else if (cosa>numA1) {alert("Te has pasado");}
 }
 alert("Has dado en el clavo marinero");
 console.log("funciona");
