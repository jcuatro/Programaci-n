<?php
namespace Parte2Examen\models;
/**
 * Plantilla vacia de Db
 */
class evento extends basedatos
{
  function __construct()
  {
    parent::__construct();
  }
  //Realizamos un nuevo Registro
  public function nuevoRegistro($nombre,$edad){
    $consulta="INSERT INTO registro (nombre,edad) ";
    $consulta=$consulta."VALUES ('$nombre',$edad)";
    return parent::consulta($consulta);
  }
}
?>
