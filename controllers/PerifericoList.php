<?php
include_once realpath('../control/PerifericosController.php');
include_once realpath('../control/Tipo_perifericoController.php');
$perifericos = PerifericosController::listAll();
$result = "";
for ($index = 0; $index < count($perifericos); $index++) {
    $Id = $perifericos[$index]->getId();
    $Nombre = Tipo_perifericoController::select($perifericos[$index]->getTipo_Periferico_id())->getNombre();
    $Marca = $perifericos[$index]->getMarca();
    $Modelo = $perifericos[$index]->getModelo();
    $StykerActivo = $perifericos[$index]->getStiker_activo();
    $Fechacompra = $perifericos[$index]->getFecha_compra();
    
    $result .= "<tr>
                    <td>$Id</td>
                    <td>$Nombre</td>
                    <td>$Marca</td>
                    <td>$Modelo</td>
                    <td>$StykerActivo</td>
                    <td>$Fechacompra</td>
                </tr>";
}

echo $result;