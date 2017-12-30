<?php

/**
*  
*/
class Cargo {

	private $id;
	private $nombre;
	private $area_id;

	function __construct($id_a,$nombre_a,$area_id_a){
		$this->id = $id_a;
		$this->nombre = $nombre_a;
		$this->area_id	= $area_id_a;
	}

	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	public function getArea(){
		return $this->area_id;
	}
}

?>