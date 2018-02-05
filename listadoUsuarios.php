<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Listado de Usuarios</title>
    <link rel="stylesheet" href="insertar.css">
  </head>
  <body>
    <h1>SALUDOS</h1>
    <br><br>
    <div class="">
      <fielset class="seleccionar">
        <legend>Selecciona tu usuario.</legend>
        <form class="user" action="ahorcado.php" method="post">
          <select class="" name="">
            <?php
            $juegos=new mysqli("localhost","root","","juegos");
            if ($juegos->connect_errno) {
              echo "Fallo al conectar a MySQL: " . $juegos->connect_error;
            } else {
              ?>
              <option value="">Usuarios</option>
              <?php
              $resultado = $juegos->query("SELECT usuario FROM usuarios");
              foreach ($resultado as $fila) {
              ?>
                <option value="<?=$fila['usuario']?>"><?=$fila['usuario']?></option>
              <?php
              }
            }
            ?>
          </select>
          <input type="submit" value="Empezar"></input>
        </form>
      </fielset>

      <fielset class="crear">
        <legend>Crear usuarios.</legend>
        <button type="button" name="button" onclick="location.href='insertarUsuario.php'">Crear nuevo usuario</button>
      </fielset>
    </div>
  </body>
</html>
