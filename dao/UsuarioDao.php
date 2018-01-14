<?php
require_once 'util/DataBase.php';
include_once realpath('../../dto/Usuario.php');

class UsuarioDao{
    public function guardar( $usuario ) {
        $nombre = $usuario->getNombre();
        $apellido = $usuario->getApellido();
        $correo = $usuario->getCorreo();
        $clave = $usuario->getClave();   
        //Inicializa el punto de conexion
        $conn = DataBase::obtenerConector('bd1');
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Inicializa la transaccion
        $conn->beginTransaction();
        //Se define la consulta
        $sql = "INSERT INTO `usuario`(`nombre`, `apellido`, `correo`, `clave`) "
                . "VALUES ('$nombre','$apellido','$correo',$clave)";
        //Ejecuta la consulta
        DataBase::insertarConsultaTransacional($conn,$sql);
        $id = $conn->lastInsertId();
        $conn->commit();
        return $id;
    }

    public function buscarBdPescadero($usuario){
        $cargo = $usuario->getCargo_id();
        $pass = $usuario->getContrasena();
        $con = new DataBase('bd2');
        $sql = "SELECT `Id`, `Nombre`, `Contraseña`, `Estado`, `Cargo_id` ,`correo`
                FROM `usuario`
                WHERE `Cargo_id` = $cargo
                AND `Contraseña` = '$pass'";
        $bd = $con->ejecutarConsulta($sql);
        $usuario = new Usuario();
        $usuario->setId($bd[0]['Id']);
        $usuario->setContrasena($bd[0]['Contraseña']);
        $usuario->setNombre($bd[0]['Nombre']);
        $usuario->setEstado($bd[0]['Estado']);
        $usuario->setCargo_id($bd[0]['Cargo_id']);
        $usuario->setCorreo($bd[0]['correo']);
//        var_dump($usuario);
        return $usuario;
    }

     public function listar()
    {
        $con = new DataBase('bd2');
        $sql = "SELECT u.`Id` AS `Id`, u.`Nombre` AS `Nombre`, u.`Contraseña` AS `Contraseña`, u.`Estado` AS `Estado`, u.`correo` AS `correo`, c.`Nombre` AS `Cargo` 
                FROM `usuario` AS `u` 
                INNER JOIN `cargo` AS `c` 
                ON (u.`Cargo_id` = c.`Id`) 
                WHERE 1";
        $bd = $con->ejecutarConsulta($sql);
        $usuarios = array();
        for ($i=0; $i < count($bd) ; $i++) { 
            $usuario = new Usuario();
                $usuario->setId($bd[$i]['Id']);
                $usuario->setContrasena($bd[$i]['Contraseña']);
                $usuario->setNombre($bd[$i]['Nombre']);
                $usuario->setEstado($bd[$i]['Estado']);
                $usuario->setCorreo($bd[$i]['correo']);
                $usuario->setCargo_id($bd[$i]['Cargo']);
            array_push($usuarios,$usuario);
        }
        return $usuarios;
    }


    }
?>