<?php
/**
* Clase para la persistencia de los datos
*/
class DataBase {
 
    public static function obtenerConector(){
        try{
            ///../../configuracion/config.ini
            $ini_array = parse_ini_file('config.ini');
            $host = $ini_array['host'];
            $dbname = $ini_array['dbname'];     
            $bdd = new PDO("mysql:host=${host};dbname=${dbname};charset=utf8",$ini_array['username'],$ini_array['password']);
        }catch(Exception $e){
            die('Error : '.$e->getMessage());
        }
        return $bdd;
    }

    public static function ejecutarConsulta($sql){
        //Inicializa el punto de conexion
        $conn = DataBase::obtenerConector();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Primero prepara la sentencia y eso es lo que ejecuta
        $sentencia=$conn->prepare($sql);
        $sentencia->execute(); 
        $data = $sentencia->fetchAll();
        $sentencia = null;
        $conn = null;
        return $data;
    }

    public static function insertarConsulta($sql){
         //Inicializa el punto de conexion
        $conn = DataBase::obtenerConector();
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Primero prepara la sentencia y eso es lo que ejecuta
        $sentencia=$conn->prepare($sql);
        $sentencia->execute(); 
        $sentencia = null;
        $conn = null;
    }

    public static function insertarConsultaTransacional($conn,$sql){
        //Primero prepara la sentencia y eso es lo que ejecuta
        $sentencia=$conn->prepare($sql);
        $sentencia->execute(); 
        $sentencia = null;
    }

}

?>