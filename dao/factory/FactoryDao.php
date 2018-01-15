<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Damos paso a la anarquía...  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
;

abstract class FactoryDao {
	
public static $NULL_GESTOR = -1;
public static $MYSQL_FACTORY = 0;

     /**
     * Devuelve una instancia de CalidadDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CalidadDao
     */
     public abstract function getCalidadDao($dbName);
     /**
     * Devuelve una instancia de CargoDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de CargoDao
     */
     public abstract function getCargoDao($dbName);
     /**
     * Devuelve una instancia de EquipoDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de EquipoDao
     */
     public abstract function getEquipoDao($dbName);
     /**
     * Devuelve una instancia de Equipo_has_mantenimientoDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Equipo_has_mantenimientoDao
     */
     public abstract function getEquipo_has_mantenimientoDao($dbName);
     /**
     * Devuelve una instancia de MantenimientoDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de MantenimientoDao
     */
     public abstract function getMantenimientoDao($dbName);
     /**
     * Devuelve una instancia de PerifericosDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de PerifericosDao
     */
     public abstract function getPerifericosDao($dbName);
     /**
     * Devuelve una instancia de ProblemaDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de ProblemaDao
     */
     public abstract function getProblemaDao($dbName);
     /**
     * Devuelve una instancia de SoftwareDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SoftwareDao
     */
     public abstract function getSoftwareDao($dbName);
     /**
     * Devuelve una instancia de SolucionDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de SolucionDao
     */
     public abstract function getSolucionDao($dbName);
     /**
     * Devuelve una instancia de Tipo_pantallaDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tipo_pantallaDao
     */
     public abstract function getTipo_pantallaDao($dbName);
     /**
     * Devuelve una instancia de Tipo_perifericoDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de Tipo_perifericoDao
     */
     public abstract function getTipo_perifericoDao($dbName);
     /**
     * Devuelve una instancia de TorreDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de TorreDao
     */
     public abstract function getTorreDao($dbName);
     /**
     * Devuelve una instancia de UsuarioDao que depende del gestor de base de datos
     * @param dbName Nombre o identificador de la base de datos a conectar
     * @return instancia de UsuarioDao
     */
     public abstract function getUsuarioDao($dbName);

     /**
     * Devuelve una instancia de factoryDao que depende del gestor de base de datos
     * @param gestor indica el id del gestor de base de datos para realizar la conexión     * @return instancia de factoryDao o null si no se ha seleccionado alguno
     */
public static function getFactory($gestor){
        switch($gestor){
            case self::$MYSQL_FACTORY:
                return new MySqlFactoryDao();
            default:
                return null;
        }
    }

}
//That´s all folks!