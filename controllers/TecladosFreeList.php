<?php
include_once realpath('../control/PerifericosController.php');

$teclados = PerifericosController::listTecladosFree();

$listas = '<option value="null">Seleccione </option>';
for ($i=0; $i < count($teclados) ; $i++) { 
	$v = $teclados[$i]->getId();
    $n = $teclados[$i]->getMarca();
    $listas .= "<option value='$v'>$v. $n</option>";
}

echo $listas;


