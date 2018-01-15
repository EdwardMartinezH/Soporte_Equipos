<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conect
 *
 * @author W7HOME
 */
class Conect {

//    static $servidor = "localhost";
//    static $usuario = "root";
//    static $contrasena = "Soporte";
//    static $bd = "sgts";
    static $servidor = "localhost"; //"localhost o 161.18.233.43";
    static $usuario = "root";//"root o certiret
    static $contrasena = "Soporte";
    static $bd = "sgtg";
    static $conexion;

    /**
     * Metodo para realizar la conexión a la BD
     */
    static function conection() {

        self::$conexion = new mysqli(self::$servidor, self::$usuario, self::$contrasena, self::$bd);
        /* comprobar la conexión */
        if (self::$conexion->connect_errno) {
            printf("Falló la conexión: %s\n", self::$conexion->connect_error);
            exit();
        }
    }

    /**
     * Metodo para ejecutar la Consulta SQL
     * @param type $consulta consulta a realizar
     * @return type Devuelve el contenido de la consulta en caso de estar bien, 
     * de lo contrario mostrara el error correspondiente
     */
    static function ejecutarConsultaSQL($consulta) {

        $result = mysqli_query(self::$conexion, $consulta);
        if ($result === FALSE) {
            die(mysqli_error(self::$conexion));
            return FALSE;
        }
        return $result;
    }

    /**
     * Metodo para consultar datos y devolver en Arrat
     * @param type $result datos de consulta
     * @return type array
     */
    static function getArray($result) {
        return mysqli_fetch_array($result);
    }

    /**
     * Metodo para obener resultado de consulta por objeto
     * @param type $result
     * @return type
     */
    static function getObject($result) {
        return mysqli_fetch_object($result);
    }

    /**
     * Metodo para obtener la cantidad de filas en una tabla
     * @param type $result
     * @return type
     */
    static function getCantidadFilas($result) {
        return mysqli_num_rows($result);
    }

    /**
     * metodo para desconectar la conexxion a la bd
     */
    static function desconnetar() {
        mysqli_close(self::$conexion);
    }
    
    static function get_Ultimo_Id(){
        return mysqli_insert_id(self::$conexion);
    }
    
    
}
