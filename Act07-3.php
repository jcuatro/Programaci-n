<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Independènssia</title>
    <style media="screen">
      * {
        box-sizing: border-box;
      }
      ul {
          list-style-type: none;
          margin: 0;
          padding: 0;
          overflow: hidden;
          background-color: rgb(32, 191, 207);
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
          background-color: #4CAF50;
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
    <h1>Paises por año de INDEPENDÈNSSIA</h1>
    <?php $color="Independènssia";
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
       $resultado = $cosa->query("SELECT Name,IndepYear from country");
       foreach ($resultado as $fila) {
         if ($fila["IndepYear"]==null) $fila['IndepYear']="No independizado";
         echo "<div class='column right' style='background-color:rgb(24, 65, 228);'>".$fila['IndepYear']
         ."</div>"
         ."<div class='column left' style='background-color:rgb(128, 166, 208);'>".$fila['Name']."</div>"."<br>";
       }
       echo "</div>";
    }
     ?>
  </body>
</html>
