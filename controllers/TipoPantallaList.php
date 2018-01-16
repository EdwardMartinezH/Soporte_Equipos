<?php
include_once realpath('../control/Tipo_pantallaController.php');

function getListasRep(){
  $tipoPantallas = Tipo_pantallaController::listAll();
   $listas = '<option value="">Seleccione </option>';
  for ($index = 0; $index < count($tipoPantallas); $index++) {
      $v = $tipoPantallas[$index]->getIdTipo_Pantalla();
      $n = $tipoPantallas[$index]->getNombre();
       $listas .= "<option value='$v'>$v. $n</option>";
  }
  return $listas;
}

echo getListasRep();
