<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) //Nostalgia  \\

include_once realpath('..').'\dao\gestor\mySql\entities\MySqlCalidadDao.php';
include_once realpath('..').'\dao\interfaz\CalidadDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlCargoDao.php';
include_once realpath('..').'\dao\interfaz\CargoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlEquipoDao.php';
include_once realpath('..').'\dao\interfaz\EquipoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlEquipo_has_mantenimientoDao.php';
include_once realpath('..').'\dao\interfaz\Equipo_has_mantenimientoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlMantenimientoDao.php';
include_once realpath('..').'\dao\interfaz\MantenimientoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlPerifericosDao.php';
include_once realpath('..').'\dao\interfaz\PerifericosDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlProblemaDao.php';
include_once realpath('..').'\dao\interfaz\ProblemaDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlSoftwareDao.php';
include_once realpath('..').'\dao\interfaz\SoftwareDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlSolucionDao.php';
include_once realpath('..').'\dao\interfaz\SolucionDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlTipo_equipoDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_equipoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlTipo_pantallaDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_pantallaDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlTipo_perifericoDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_perifericoDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlTorreDao.php';
include_once realpath('..').'\dao\interfaz\TorreDao.php';
include_once realpath('..').'\dao\gestor\mySql\entities\MySqlUsuarioDao.php';
include_once realpath('..').'\dao\interfaz\UsuarioDao.php';
include_once realpath('..').'\dao\factory\FactoryDao.php';
include_once realpath('..').'\dao\gestor\mySql\conexion\MySqlConexion.php';

class MySqlFactoryDao extends FactoryDao{

    /**
     * Devuelve una instancia de la entidad MySqlCalidadDao
     * @return Instancia de la entidad MySqlCalidadDao
     */
    public function getCalidadDao($dbName) {
        return new MySqlCalidadDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlCargoDao
     * @return Instancia de la entidad MySqlCargoDao
     */
    public function getCargoDao($dbName) {
        return new MySqlCargoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlEquipoDao
     * @return Instancia de la entidad MySqlEquipoDao
     */
    public function getEquipoDao($dbName) {
        return new MySqlEquipoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlEquipo_has_mantenimientoDao
     * @return Instancia de la entidad MySqlEquipo_has_mantenimientoDao
     */
    public function getEquipo_has_mantenimientoDao($dbName) {
        return new MySqlEquipo_has_mantenimientoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlMantenimientoDao
     * @return Instancia de la entidad MySqlMantenimientoDao
     */
    public function getMantenimientoDao($dbName) {
        return new MySqlMantenimientoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlPerifericosDao
     * @return Instancia de la entidad MySqlPerifericosDao
     */
    public function getPerifericosDao($dbName) {
        return new MySqlPerifericosDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlProblemaDao
     * @return Instancia de la entidad MySqlProblemaDao
     */
    public function getProblemaDao($dbName) {
        return new MySqlProblemaDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlSoftwareDao
     * @return Instancia de la entidad MySqlSoftwareDao
     */
    public function getSoftwareDao($dbName) {
        return new MySqlSoftwareDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlSolucionDao
     * @return Instancia de la entidad MySqlSolucionDao
     */
    public function getSolucionDao($dbName) {
        return new MySqlSolucionDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlTipo_pantallaDao
     * @return Instancia de la entidad MySqlTipo_pantallaDao
     */
    public function getTipo_pantallaDao($dbName) {
        return new MySqlTipo_pantallaDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlTipo_equipoDao
     * @return Instancia de la entidad MySqlTipo_equipoDao
     */
    public function getTipo_equipoDao($dbName) {
        return new MySqlTipo_equipoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlTipo_perifericoDao
     * @return Instancia de la entidad MySqlTipo_perifericoDao
     */
    public function getTipo_perifericoDao($dbName) {
        return new MySqlTipo_perifericoDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlTorreDao
     * @return Instancia de la entidad MySqlTorreDao
     */
    public function getTorreDao($dbName) {
        return new MySqlTorreDao($this->getConexion()->obtener($dbName));
    }
    /**
     * Devuelve una instancia de la entidad MySqlUsuarioDao
     * @return Instancia de la entidad MySqlUsuarioDao
     */
    public function getUsuarioDao($dbName) {
        return new MySqlUsuarioDao($this->getConexion()->obtener($dbName));
    }

     /**
     * Devuelve una instancia del manejador de conexión
     * @return Instancia de MySqlConexion
     */
    private function getConexion() {
        return new MySqlConexion();
    }

}
//That´s all folks!
