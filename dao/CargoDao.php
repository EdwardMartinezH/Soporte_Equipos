<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Cargo.php');

	class CargoDao{


		public function listar(){
			$sql = "SELECT * FROM `cargo` WHERE 1";
			$conn = new DataBase("bd2");
			$result = $conn->ejecutarConsulta($sql);
			$cargos = array();
			for ($i=0; $i < count($result); $i++) { 
				$cargo = new Cargo(
					$result[$i]['Id'],
					$result[$i]['Nombre'],
					$result[$i]['Area_id']
					);
				array_push($cargos, $cargo);
			}
			return $cargos;
		}

		
	}

?>