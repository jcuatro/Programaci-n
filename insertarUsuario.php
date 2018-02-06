<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="insertar.css">
  </head>
  <body>
    <h1>CREAR PERFIL</h1>
    <form action="conectarDB.php" method="post">
      <fieldset class="caja">
        <legend>¿QUIEN ERES?</legend>
        <p>Nombre <b>*</b><br>
        <input type="text" name="nombre" value="" placeholder="Introduce tu nombre" required></p>
        <p>Apellidos <br>
          <input type="text" name="apellidos" value="" placeholder="Introduce tus apellidos"></p>
        <p>Fecha de nacimiento: <br>
        <input type="text" name="edad" placeholder="Introduce tu edad"></p>
        <p>Curso <br>
          <select name="curso" placeholder="Introduce tu curso">
            <option value="">Selecciona uno</option>
            <option value="daw">DAW</option>
            <option value="Bachiller">Bachiller</option>
            <option value="ESO">ESO</option>
            <option value="Infantil">Infantil</option>
            <option value="Magisterio">Magisterio</option>
          </select></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CÓMO QUIERES INICIAR SESIÓN?</legend>
        <p>Nombre de usuario <b>*</b><br>
          <input type="text" name="usuario" value="" placeholder="Introduce tu usuario" required></p>
        <p>Contraseña <br>
          <input type="password" name="contrasenya" value="" placeholder="Introduce tu contraseña"></p>
        <p>Repite la contraseña <br>
          <input type="password" name="contrasenya2" value="" placeholder="Introduce tu contraseña"></p>
      </fieldset>
      <fieldset class="caja">
        <legend>¿CONDICIONES DE REGISTRO?</legend>
        <p><input type="checkbox" name="acuerdo" value="ok">Acepto las condiciones de registro y uso de cookies, aunque no haya.</p>
      </fieldset>
      <input type="submit" name="crear" value="Crear cuenta">
    </form>
    <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Volver</button>
  </body>
</html>
