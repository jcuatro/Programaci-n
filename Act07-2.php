<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Continentes</title>
    <style media="screen">
    * {
        box-sizing: border-box;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: #333;
      }
      li {
          float: left;
      }
      li a {
          display: block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
      }
      li a:hover:not(.active) {
          background-color: #111;
      }
      .active {
          background-color: rgb(32, 191, 207);
      }
      .column {
        float: left;
        padding: 10px;
        height: 30px;
      }
      .left {
        width: 25%;
      }
      .right {
        width: 75%;
      }
      .row:after {
        content: "";
        display: table;
        clear: both;
      }
    </style>
  </head>
  <body>
    <h1>Paises agrupados por continentes</h1>
    <?php $color="Continentes";
    ?>
    <ul>
      <li><a class="<?php if ($pantalla=="superficie") echo "active";?>" href="Act07-1.php">Superficies</a></li>
      <li><a class="<?php if ($pantalla=="continente") echo "active";?>" href="Act07-2.php">Continentes</a></li>
      <li><a class="<?php if ($pantalla=="indep") echo "active";?>" href="Act07-3.php">Independènssia</a></li>
    </ul
    <?php
    $cosa = new mysqli("localhost", "root", "", "world");
    if ($cosa->connect_errno){
      echo "fallo al conectar a MySQL". $cosa->connect_errno;
    }else{
      echo "<div class='row'>";
      $resultado = $cosa->query("SELECT Name, Continent from country group by Name order by continent asc, Name asc");
      "<br>";
      foreach ($resultado as $fila) {
        echo "<div class='column left' style='background-color:rgb(24, 65, 228);'>".
        $fila['Name']."</div>"."<div class='column right' style='background-color:rgb(128, 166, 208);'>".
      $fila['Continent']."</div>"."<br>";
        }
        echo "</div>";
    }
     ?>
  </body>
</html>
