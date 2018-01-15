<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Un generador de código no basta. Ahora debo inventar también un generador de frases tontas  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Software.php';
require_once realpath("..").'\dao\interfaz\SoftwareDao.php';

class SoftwareController {

  /**
   * Crea un objeto Software a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSoftware
   * @param equipo_idEquipo
   * @param tipo_Software_idTipo_Software
   * @param fecha_vencimiento
   * @param version
   * @param nombre
   */
  public static function insert( $idSoftware,  $equipo_idEquipo,  $tipo_Software_idTipo_Software,  $fecha_vencimiento,  $version,  $nombre){
      $software = new Software();
      $software->setIdSoftware($idSoftware); 
      $software->setEquipo_idEquipo($equipo_idEquipo); 
      $software->setTipo_Software_idTipo_Software($tipo_Software_idTipo_Software); 
      $software->setFecha_vencimiento($fecha_vencimiento); 
      $software->setVersion($version); 
      $software->setNombre($nombre); 

     $softwareDao =FactoryDao::getFactory(self::getGestorDefault())->getSoftwareDao(self::getDataBaseDefault());
     $rtn = $softwareDao->insert($software);
     $softwareDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Software de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSoftware
   * @return El objeto en base de datos o Null
   */
  public static function select($idSoftware){
      $software = new Software();
      $software->setIdSoftware($idSoftware); 

     $softwareDao =FactoryDao::getFactory(self::getGestorDefault())->getSoftwareDao(self::getDataBaseDefault());
     $result = $softwareDao->select($software);
     $softwareDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Software  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSoftware
   * @param equipo_idEquipo
   * @param tipo_Software_idTipo_Software
   * @param fecha_vencimiento
   * @param version
   * @param nombre
   */
  public static function update($idSoftware, $equipo_idEquipo, $tipo_Software_idTipo_Software, $fecha_vencimiento, $version, $nombre){
      $software = self::select($idSoftware);
      $software->setEquipo_idEquipo($equipo_idEquipo); 
      $software->setTipo_Software_idTipo_Software($tipo_Software_idTipo_Software); 
      $software->setFecha_vencimiento($fecha_vencimiento); 
      $software->setVersion($version); 
      $software->setNombre($nombre); 

     $softwareDao =FactoryDao::getFactory(self::getGestorDefault())->getSoftwareDao(self::getDataBaseDefault());
     $softwareDao->update($software);
     $softwareDao->close();
  }

  /**
   * Elimina un objeto Software de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSoftware
   */
  public static function delete($idSoftware){
      $software = new Software();
      $software->setIdSoftware($idSoftware); 

     $softwareDao =FactoryDao::getFactory(self::getGestorDefault())->getSoftwareDao(self::getDataBaseDefault());
     $softwareDao->delete($software);
     $softwareDao->close();
  }

  /**
   * Lista todos los objetos Software de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Software en base de datos o Null
   */
  public static function listAll(){
     $softwareDao =FactoryDao::getFactory(self::getGestorDefault())->getSoftwareDao(self::getDataBaseDefault());
     $result = $softwareDao->listAll();
     $softwareDao->close();
     return $result;
  }

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return FactoryDao::$NULL_GESTOR;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return "dbName";
  }

}
//That´s all folks!