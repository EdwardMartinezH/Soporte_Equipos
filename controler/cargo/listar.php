<?php
	require_once '../../dao/CargoDao.php';
	require_once '../../dto/Cargo.php';

	$cargoDao = new CargoDao();

	$cargos = $cargoDao->listar();
	$html = "";
	for ($i=0; $i < count($cargos) ; $i++) { 
		if($i > 0){
			$id = $cargos[$i]->getId();
			$nombre = $cargos[$i]->getNombre();
			$html2 = "<option value='$id'>$nombre</option>";
			$html .= $html2;
		}
	}

	echo $html;
	 

?>