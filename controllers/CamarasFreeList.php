<?php
include_once realpath('../control/PerifericosController.php');

$camaras = PerifericosController::listCamarasFree();

$listas = '<option value="null">Seleccione </option>';
for ($i=0; $i < count($camaras) ; $i++) { 
	$v = $camaras[$i]->getId();
    $n = $camaras[$i]->getMarca();
    $listas .= "<option value='$v'>$v. $n</option>";
}

echo $listas;
