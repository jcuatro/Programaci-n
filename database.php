<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario</title>
  </head>
  <body>
    <h1>Práctica de formulario</h1>
    <?php
    $world=new mysqli("localhost","root","","world");
    if ($world->connect_errno) {
      echo "Fallo al conectar a MySQL: " . $world->connect_error;
    } else {
      echo "Conectado a la base de datos"."<br>";
      if (empty($_POST['SurfaceArea'])) $_POST['SurfaceArea']='0';
      if ($_POST["Continent"]=="") {
        $resultado = $world->query("SELECT Name FROM country WHERE SurfaceArea>'".$_POST['SurfaceArea']."'");
        foreach ($resultado as $fila) {
          echo "El pais es: ".$fila['Name']."<br>";
        }
      } else {
        $resultado = $world->query("SELECT Name FROM country WHERE Continent='".$_POST['Continent']."' AND SurfaceArea>'".$_POST['SurfaceArea']."'");
        foreach ($resultado as $fila) {
          echo "El pais es:".$fila['Name']."<br>";
        }
      }
    }
    ?>
    <button type="button" onclick="location.href='database2.php'">Volver</button>
  </body>
</html>
