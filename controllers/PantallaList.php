<?php
include_once realpath('../control/PerifericosController.php');

$pantallas = PerifericosController::listPantallasFree();
$listas = '<option value="">Seleccione </option>';
for ($i=0; $i < count($pantallas) ; $i++) { 
	$v = $pantallas[$i]->getId();
      $n = $pantallas[$i]->getMarca();
       $listas .= "<option value='$v'>$v. $n</option>";
}

echo $listas;