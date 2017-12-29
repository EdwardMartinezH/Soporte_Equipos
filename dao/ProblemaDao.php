<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Problema.php');
class ProblemaDao{

 public function listar()
	{
        $con = new DataBase('bd1');
		$sql = "SELECT * FROM `problema` WHERE 1";
		$bd = $con->ejecutarConsulta($sql);
		$problemas = array();
		for ($i=0; $i < count($bd) ; $i++) { 
			$problema = new Problema();
                        $problema->setIdproblema($bd[$i]['idProblema']);
			$problema->setProblema($bd[$i]['problema']);
                        $problema->setEquipoequipo($bd[$i]['Equipo_idEquipo']);
                        $problema->setFechaRegistro($bd[$i]['fecha_registro']);
			array_push($problemas,$problema);
		}
		//var_dump($problemas);
		return $problemas;
	}
        public function guardar($problema) {
            $con = new DataBase('bd1');            
            $info=$problema->getProblema();
            $idEquipo=$problema->getEquipoequipo()->getIdequipo();
            $sql = "INSERT INTO `problema`(`problema`, `Equipo_idEquipo`) "
                    . "VALUES ('$info','$idEquipo')";            
            $con->insertarConsulta($sql);
        }
}
?>