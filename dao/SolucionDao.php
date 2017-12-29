result<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Solucion.php');
include_once realpath('../../dto/Problema.php');

/**
* 
*/
class SolucionDao
{
	
	public function listarSolucionAndProblemaByEquipo($idequipo){
		$sql = "SELECT s.`fecha_Solucion` AS `fSolucion`, 
                               s.`Solucion` AS `solucion`, 
                               p.`fecha_registro` AS `fProblema`,
                               p.`problema` AS `problema` 
        		FROM `solucion` AS `s` 
        		INNER JOIN `problema` AS `p` 
        		ON (s.`Problema_idProblema` = p.`idProblema`) 
        		INNER JOIN `equipo` AS `e` ON (p.`Equipo_idEquipo` = e.`idEquipo`) 
        		WHERE e.`usuario_Id` =  '$idequipo'";
                
                $conn = new DataBase("bd1");
                
                $result = $conn->ejecutarConsulta($sql);
                
                $set = array();

                
                for ($index = 0; $index < count($result); $index++) {
                    $solucion = new Solucion();
                    $solucion->setFechaSolucion($result[$index]['fSolucion']);
                    $solucion->setSolucion($result[$index]['solucion']);
                    $problema = new Problema();
                    $problema->setFechaRegistro($result[$index]['fProblema']);
                    $problema->setProblema($result[$index]['problema']);
                    $set2 = array();
                    array_push($set2, $problema,$solucion);
                    array_push($set,$set2);              
                }
                return $set;
	}
}

?>