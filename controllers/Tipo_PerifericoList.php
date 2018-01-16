<?php

include_once realpath('../control/Tipo_perifericoController.php');

function getListasRep(){
  $tipoPeriferico = Tipo_perifericoController::listAll();
   $listas = '<option value="">Seleccione </option>';
  for ($index = 0; $index < count($tipoPeriferico); $index++) {
      $v = $tipoPeriferico[$index]->getId();
      $n = $tipoPeriferico[$index]->getNombre();
       $listas .= "<option value='$v'>$v. $n</option>";
  }
  return $listas;
}

echo getListasRep();

