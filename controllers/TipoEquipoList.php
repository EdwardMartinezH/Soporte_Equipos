<?php

include_once realpath('../control/Tipo_equipoController.php');

function getListasRep(){
  $tipoEquipo = Tipo_equipoController::listAll();
   $listas = '<option value="">Seleccione </option>';
  for ($index = 0; $index < count($tipoEquipo); $index++) {
      $v = $tipoEquipo[$index]->getId_tipo_equipo();
      $n = $tipoEquipo[$index]->getNombre();
       $listas .= "<option value='$v'>$v. $n</option>";
  }
  return $listas;
}

echo getListasRep();