<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/TipoPantalla.php');

class TipoPantallaDao{

	public function buscar($id)
	{
		$sql = "SELECT * FROM `tipo_pantalla` WHERE `idTipo_Pantalla` = $id";
		$conn = new DataBase("bd1");
		$result = $conn->ejecutarConsulta($sql);
		if(count($result) > 0){
			$tipoPantalla = new TipoPantalla();
			$tipoPantalla->setId($result[0]['idTipo_Pantalla']);
			$tipoPantalla->setNombre($result[0]['nombre']);
			return $tipoPantalla;
		}else{
			return null;
		}
	}

}

?>