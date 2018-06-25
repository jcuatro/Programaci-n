<?php
require_once __DIR__.'/../vendor/autoload.php';
use Parte1Examen\models\Juego;
$baseDatos=new Juego();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="css/Usuario.css">
  </head>
  <body>
    <h1>CREAR JUEGO</h1>
    <form method="post" action="listadoUsuarios.php" onsubmit="return Vacios()">
      <fieldset class="caja">
        <p>Nombre <b>*</b><br>
        <input type="text" name="nombre" value="" id="nombre" placeholder="Introduce el nombre" required></p>
        <p>Edad: <br>
        <input type="text" name="edad" id="edad" placeholder="Introduce la edad"></p>
      </fieldset>
      <input type="submit" name="crear" value="Crear juego">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Volver</button>
      <script type="text/javascript" src="js/Insertar.js" charset="utf-8"></script>
  </body>
</html>
