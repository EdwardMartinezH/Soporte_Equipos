<?php
include_once 'Conect.php';
//include_once ('../util/conexion1.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */





function consultar_areas() {
    Conect::conection();
    $informacion_area = array();
    $consulta = "SELECT * FROM `persona` where 1 ";
    $resul = Conect::ejecutarConsultaSQL($consulta);
    $informacion_area = Conect::getArray($resul);
    var_dump($informacion_area);
    return $informacion_area;
}

