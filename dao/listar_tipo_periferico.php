<?php 
require_once '../util/conexion2.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT `id`, `nombre` FROM `tipo_periferico` ';

  $result = $mysqli->query($query);

  $listas = '<option value="">Seleccione </option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[id]'>$row[id]. $row[nombre]</option>";
  }
  return $listas;
}

echo getListasRep();

