<?php
include_once realpath('../control/PerifericosController.php');

$impresoras = PerifericosController::listImpresorasFree();

$listas = '<option value="">Seleccione </option>';
for ($i=0; $i < count($impresoras) ; $i++) { 
	$v = $impresoras[$i]->getId();
    $n = $impresoras[$i]->getMarca();
    $listas .= "<option value='$v'>$v. $n</option>";
}

echo $listas;
