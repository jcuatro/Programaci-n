function actualizarBlanco() {

  var nombre = document.getElementById('nuevonombre').value;
  var apellido = document.getElementById('nuevoapellido').value;
  var edad = document.getElementById('nuevoedad').value;
  var curso = document.getElementById('nuevocurso').value;

  if (nombre.length == 0) {
    alert("Error,  rellena el campo nombre");
    return false;
  }

  if (apellido.length == 0) {
    alert("Error, rellena el campo apellidos");
    return false;
  }

  if (edad.length == 0) {
    alert("Error, rellena el campo edad");
    return false;
  }

  if (curso.length == 0) {
    alert("Error, rellena el campo curso");
    return false;
  }
}
