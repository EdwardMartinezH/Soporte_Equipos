<?php
include_once realpath('../control/PerifericosController.php');

$mouses = PerifericosController::listmousesFree();

$listas = '<option value="null">Seleccione </option>';
for ($i=0; $i < count($mouses) ; $i++) { 
	$v = $mouses[$i]->getId();
    $n = $mouses[$i]->getMarca();
    $listas .= "<option value='$v'>$v. $n</option>";
}

echo $listas;
