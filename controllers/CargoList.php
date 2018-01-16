<?php

include_once realpath('../control/CargoController.php');

function getListasRep(){
    $cargos = CargoController::listAll();
$html = "<option value=''>ELIJA UNA OPCION </option>";
for ($i = 0; $i < count($cargos); $i++) {
    if ($cargos[$i]->getId() > 0) {
        $id = $cargos[$i]->getId();
        $nombre = $cargos[$i]->getNombre();
        $html .= "<option value='$id'>$id . $nombre</option>";
    }
}
return $html;
}

echo getListasRep();


