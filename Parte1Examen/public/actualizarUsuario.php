<?php
require_once __DIR__.'/../vendor/autoload.php';
use Parte1Examen\models\Usuario;
$baseDatos=new Usuario();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Actualizar</title>
    <link rel="stylesheet" href="css/Usuario.css">
  </head>
  <body>
    <h1>MODIFICAR USUARIO</h1>
    <form name="enviar" method="post" action="listadoUsuarios.php" onsubmit="actualizarBlanco()">
      <fieldset>
        <?php
        $baseDatos->leerDatos();
        ?>
        <p>Nombre de usuario <b>*</b><br>
          <input type="text" name="usuario" value="<?=$baseDatos->getUsuario()?>" readonly></p>
        <fieldset class="caja">
          <legend>¿QUIEN ERES?</legend>
          <p>Nombre <b>*</b><br>
          <input type="text" name="nombre" value="<?=$baseDatos->getNombre()?>" id="nuevonombre" required></p>
          <p>Apellidos <br>
            <input type="text" name="apellidos" value="<?=$baseDatos->getApellidos()?>" id="nuevoapellido" ></p>
          <p>Año de nacimiento: <br>
          <input type="text" name="edad" value="<?=$baseDatos->getEdad()?>" id="nuevoedad" ></p>
          <p>Curso <br>
            <select name="curso" id="nuevocurso" >
              <option value="<?=$baseDatos->getCurso()?>"><?=$baseDatos->getCurso()?></option>
              <option value="2daw">2º DAW</option>
              <option value="1daw">1º DAW</option>
              <option value="bachiller">Bachiller</option>
              <option value="eso">ESO</option>
              <option value="primaria">Primaria</option>
            </select></p>
        </fieldset>
        <input type="submit" class="actualizar" name="modificar" value="Actualizar">
      </fieldset>
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Volver</button>
    <script type="text/javascript" src="js/Actulizar.js" charset="utf-8"></script>
  </body>
</html>
