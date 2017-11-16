//Num aleatorio (0-4)
var num=Math.round(Math.random() * (6 - 0));
console.log(numAl);

var palabras=["urnas", "almanaque", "votar", "peluquin", "generalidad", "independiente", "españa"];

var intento=palabras[num];
console.log(adivinar);

//contador
var intentos=5;
var contador=0;

//array de la palabra a palabraAcertar
var palabraAcertar=[];
for (let i=0; i<=intento.length-1;i++){
  palabraAcertar[i]=intento.charAt(i);
}

//array de la palabra a adivinar
var palabra=[];
for (let i=0; i<=palabraAcertar.length-1;i++){
  palabra[i]="0";
}
var cero=6;  //cualquier número diferente de 0
var encontrada=false;
var fallo="";

while(intentos>contador && barrabaja!=0){
//pedir letra y comprobar si letra
  var letra=prompt("Te quedan "+("intentos-cont")+" intentos");;
  while (isNaN(letra)==false){
    letra=prompt("Introduce una letra en minúscula");
  }

  //colocar letra en plantilla
  for (let i=0; i<=palabra.length-1; i++){
    if (letra == palabraAcertar[i]) {
      palabra[i]=letra;
      encontrada=true;
    }
  }

  //comprobar si encontrada
  if (encontrada==true){
    console.log(letra);
    alert("Letra encontrada");
  }else{
    fallo=fallo+letra;
    console.log(fallo);
    cont++
  }
  comp=false

//mostrar array
  var l="";
  for (let i=0; i<=adivinar.length-1; i++){
    l=l+palabra[i];
    //console.log(palabra[i]);
  }
  console.log(j);

  //comprobar si se ha acertado
  barrabaja=0;
  preguntar=false;
  for (let i=0; i<=adivinar.length-1; i++){
    if(palabra[i]=="0") cero=cero+1;
  }
}

if (cero==0) alert("¡¡ENHORABUENA!!, no has ganado nada.");
else alert("Mejor suerte la próxima vez");
