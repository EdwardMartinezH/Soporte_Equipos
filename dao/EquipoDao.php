<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Equipo.php');

class EquipoDao{
    public function guardar( $equipo ) {
         $con = new DataBase('bd1');            
            $idUsuario=$equipo->getUsuariousuario()->getId();
            $id=$equipo->getIdequipo();
            $sql = "INSERT INTO `equipo`(`idEquipo`, `usuario_Id`) VALUES ($id,$idUsuario)";            
            $con->insertarConsulta($sql);
            return $con->getUltimoId();
    }

    public function buscar($equipo){
        $id=$equipo->getIdequipo();
        $con = new DataBase('bd1');
        $sql = "SELECT `idEquipo`, `usuario_Id` 
                FROM `equipo`
                WHERE `idEquipo` = $id";                
        $bd = $con->ejecutarConsulta($sql);
        $equipo = new Equipo();
        $equipo->setIdequipo($bd[0]['idEquipo']);
        $usuario=new Usuario();
        $usuario->setId($bd[0]['usuario_Id']);
        $equipo->setUsuariousuario($usuario);

        return $equipo;
    }
    public function buscarByUsuario($equipo){  
        $idUsuario=$equipo->getUsuariousuario()->getId();
        $con = new DataBase('bd1');
        $sql = "SELECT `idEquipo`, `usuario_Id` 
                FROM `equipo`
                WHERE `usuario_Id` = $idUsuario";                
        $bd = $con->ejecutarConsulta($sql);
        $equipo = new Equipo();
        $equipo->setIdequipo($bd[0]['idEquipo']);
        $usuario=new Usuario();
        $usuario->setId($bd[0]['usuario_Id']);
        $equipo->setUsuariousuario($usuario);

        return $equipo;
    }

     public function listar()
    {
        $con = new DataBase('bd1');
		$sql = "SELECT * FROM `equipo` WHERE 1";
		$bd = $con->ejecutarConsulta($sql);
		$equipos = array();
		for ($i=0; $i < count($bd) ; $i++) { 
			$equipo = new Equipo();
                        $equipo->setIdequipo($bd[$i]['idEquipo']);
			$usuario=new Usuario();
                        $usuario->setId($bd[$i]['usuario_Id']);
                        $equipo->setUsuariousuario($usuario);
			array_push($equipos,$equipo);
		}
		//var_dump($equipos);
		return $equipos;
    }


    }
?>