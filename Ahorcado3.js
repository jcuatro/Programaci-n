function comprobar(introducirletra, letrausada){
  for (i=0;i<letrausada.length; i++) {
    if (introducirletra==letrausada[i]) {
      return true;
    }
  }
}
var palabras=["urnas","independencia","votar","legalidad","generalidad"];
var letrausada=[];
var numero;
var letracorrecta=-1;
const intentos=10;
var contador=0;
var encontrada=false;

var aleatorio = Math.round(Math.random()*palabras.length);
var random = palabras[aleatorio];

console.log(random);
var letras = new Array(random.length);

for (var i=0; i<random.lenght; i++){
  letras[i]=random.charAt(i);
  numero=i;
}

var espacios = new Array(random.length);
for (var j=0; i<random.length; j++) {
  espacios[j]="0";
}

while (contador<intentos) {
  var letrausada=([espacios]+"\nnumero:"(numero+1)+"\eEl numero de intentos restantes es :"+(intentos-contador));
  while(letrausada.length > 1 || isNaN(letrausada)==false)
    alert("Introduce una letra por favor");
    letrausada=prompt([espacios]+"\nNúmero de letras:"+(numero+1)+"\n"+"El número de intentos restantes es :"+(intentos-contador));
  while (comprobar(introducirletra,letrausada)==true) {
    alert("Letra ya usada");
    letraintroducida=prompt([espacios]+"\nNumero de letras:"+(numero+1)+"\n"+"El número de intentos restantes es :"+(intentos-contador));
  }
}

while (comprobar(introducirletra, letrausada)==true) {
  alert("Letra ya usada")
  introducirletra=prompt([espacios]+"\nNúmero de letras:"+(numero+1)+"\nEl número de intentos restantes es :"+(intentos-contador));
  while (introducirletra.length > 1 || isNaN(introducirletra)==false) {
    introducirletra=prompt([espacios]+"\nNúmero de letras:"+(numero+1)+"\nEl número de intentos restantes es :"+(intentos-contador));
  }
}

letrausada.push(introducirletra);

for (var i = 0; i < letras.length; i++) {
  if (letraintroducida==letras[i]) {
    espacios[i]=introducirletra;
    encontrada=true;
    letras++;
  }
}
if (encontrada!=true) {
  contador++;
  console.log("Un intento menos");
}
encontrada=false
if (numero==letracorrecta) {
  alert("Enhorabuena, la palabra era:"+random);
}
