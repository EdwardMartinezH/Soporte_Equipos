<?php 
require_once '../util/conexion2.php';

function getListasRep(){
  $mysqli = getConn();
  $query = 'SELECT u.`Cargo_id` ,c.`Nombre` FROM `usuario` AS u INNER JOIN cargo c ON u.`Cargo_id` = c.id ';

  $result = $mysqli->query($query);

  $listas = '<option value="">Elige una opción </option>';
  while($row = $result->fetch_array(MYSQLI_ASSOC)){
    $listas .= "<option value='$row[Cargo_id]'>$row[Cargo_id]. $row[Nombre]</option>";
  }
  return $listas;
}

echo getListasRep();

