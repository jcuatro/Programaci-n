<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuenta</title>
    <link rel="stylesheet" type="text/css" href="insertar.css">
  </head>
  <body>
    <h1>Agregar un usuario</h1>
       <h3>Formulario de registro</h3>
       <form  action="conectarDB.php" method="post">
       <div class="box">
         <fieldset>
         <legend>¿QUIEN ERES?</legend>
         <p>Nombre <br>
         <input type="text" name="Nombre" placeholder="Introduce tu nombre" required> </p>
         <p>Apellidos <br>
         <input type="text" name="Apellidos" placeholder="Introduce tus apellidos" required> </p>
         <p>Correo electrónico <br>
         <input type="text" name="Correo"> </p>
         <p>Sexo <br>
         <input type="radio" name="" value="">¿Que es eso? He oido hablar de ello pero no se...
         <input type="radio" name="" value=""> Muy de vez en cuando
         <p><input type="radio" name="" value=""> Con frecuencia (miento fatal) </p> </p>
         <p>Fecha de nacimiento: <br>
         <input type="date" name="date"></p>
         <p>Curso <br>
         <select name="curso" placeholder="Introduce tu curso (Ordenados de mayor a menor nivel)" required>
         <option value="DAW">DAW</option>
         <option value="Primaria">Primaria</option>
         <option value="Infantil">Infantil</option>
         <option value="Universidad">Universidad</option>
         <option value="Magisterio">Magisterio</option></p>
       </div>
       <div class="box">
         <fieldset>
         <legend>¿COMO QUIERES INICIAR SEASIÓN?</legend>
         <p>Nombre de usuario <br>
         <input type="text" name="usuario" placeholder="Introduce un nombre de usuario" required> </p>
         <p>Contraseña <br>
         <input type="password" name="passw" placeholder="Introduce una contraseña" required> </p>
         <p>Vuelve a escribir la contraseña <br>
         <input type="password" name="" placeholder="Introduce otra vez la contraseña" required> </p>
       </fieldset>
       </div>
       <div class="box">
         <fieldset>
         <legend>CONDICIONES DE REGISTRO</legend>
      <p>Tienes que aceptar por cojones<br>
         <p><input type="checkbox" name="" value="">Acepto el acuerdo de servicios, la declaración de privacidad y la declaración de uso de cookies (Aunque no haya)</p>
       </fieldset>
       </div>
       <input type="submit" name="crear" value="Crear cuenta">
       </form>
       <button type="button" name="button" onclick="location.href='listadoUsuarios.php'">Atras</button>
  </body>
</html>
