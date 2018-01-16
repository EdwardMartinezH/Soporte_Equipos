<?php

include_once realpath('../control/PerifericosController.php');
include_once realpath('../dto/Perifericos.php');

/**
 * Insertar un perifericos. Se trae todo. La validación se hace en HTML y aquí llegan muuuchos ""      
 * La request debe traer idEquipo,idTipoPeriferico,idTipoPantalla,marca,modelo,serial,pulgadas,sticker_activo,fecha_compra         
 */
$last_id = PerifericosController::insert(
        null, 
        filter_input(INPUT_POST, 'marca'), 
        filter_input(INPUT_POST, 'modelo'), 
        filter_input(INPUT_POST, 'serial'), 
        filter_input(INPUT_POST, 'pulgadas'), 
        filter_input(INPUT_POST, 'stiker_activo'), 
        filter_input(INPUT_POST, 'fecha_compra'), 
        filter_input(INPUT_POST, 'tipo_periferico'), 
        filter_input(INPUT_POST, 'tipo_pantalla')
);
header("Status: 301 Moved Permanently");
header("Location: http://localhost/Soporte_Equipos/vista/FormRegistrarPeriferico.php");
exit;
//echo "postRegistrarPerifericos(".$last_id.");";

               

