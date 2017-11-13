function comprobar(introducirletra, letrausada){
  for (i=0;i<letrausada.length; i++) {
    if (introducirletra==letrausada[i]) {
      return true;
    }
  }
}
var palabras=["urnas","independencia","votar","legalidad","generalidad"];
var letrausada=[];
var letracorrecta=-1;
var numero;
const intentos=10;
var contador=0;
var encontrada=false;

var cosa = Math.round(Math.random()*palabras.length);
