<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Perifericos.php');

class PerifericoDao{
    
    public function buscar($param) {
        $sql = "SELECT * FROM `perifericos` WHERE `id` = $param";
        $periferico = DataBase::ejecutarConsulta();
        return $periferico[0];
    }
    
    public function guardar( $periferico ) {
        $marca_s=$periferico->getMarca();
        $modelo_s=$periferico->getModelo();
        $serial_s=$periferico->getSerial();
        $pulgadas_s=$periferico->getPulgadas();
        $stiker_s=$periferico->getStikerActivo();
        $fecha_compra_s=$periferico->getFechaCompra(); 
        $tipoPeriferico_s=$periferico->getTipoPeriferico();
        $tipoPantalla_s=$periferico->getTipoPantallatipoPantalla(); 
        //Inicializa el punto de conexion
        $conn = new DataBase("bd1");

        $sql = "INSERT INTO `perifericos`(`Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`) 
                VALUES (null,'$marca_s','$modelo_s','$serial_s','$pulgadas_s','$stiker_s','$fecha_compra_s',$tipoPeriferico_s,$tipoPantalla_s)";
        //Ejecuta la consulta
        $conn->insertarConsulta($sql);
        $id = $conn->getUltimoId();
        return $id;
    }

    public function actualizar($periferico){

    }
}

?>