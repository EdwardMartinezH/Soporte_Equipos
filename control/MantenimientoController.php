<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Mantenimiento.php';
require_once realpath("..").'\dao\interfaz\MantenimientoDao.php';

class MantenimientoController {

  /**
   * Crea un objeto Mantenimiento a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMantenimiento
   * @param feha_mantenimiento
   * @param observaciones
   */
  public static function insert( $idMantenimiento,  $feha_mantenimiento,  $observaciones){
      $mantenimiento = new Mantenimiento();
      $mantenimiento->setIdMantenimiento($idMantenimiento); 
      $mantenimiento->setFeha_mantenimiento($feha_mantenimiento); 
      $mantenimiento->setObservaciones($observaciones); 

     $mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getMantenimientoDao(self::getDataBaseDefault());
     $rtn = $mantenimientoDao->insert($mantenimiento);
     $mantenimientoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Mantenimiento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMantenimiento
   * @return El objeto en base de datos o Null
   */
  public static function select($idMantenimiento){
      $mantenimiento = new Mantenimiento();
      $mantenimiento->setIdMantenimiento($idMantenimiento); 

     $mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getMantenimientoDao(self::getDataBaseDefault());
     $result = $mantenimientoDao->select($mantenimiento);
     $mantenimientoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Mantenimiento  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMantenimiento
   * @param feha_mantenimiento
   * @param observaciones
   */
  public static function update($idMantenimiento, $feha_mantenimiento, $observaciones){
      $mantenimiento = self::select($idMantenimiento);
      $mantenimiento->setFeha_mantenimiento($feha_mantenimiento); 
      $mantenimiento->setObservaciones($observaciones); 

     $mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getMantenimientoDao(self::getDataBaseDefault());
     $mantenimientoDao->update($mantenimiento);
     $mantenimientoDao->close();
  }

  /**
   * Elimina un objeto Mantenimiento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idMantenimiento
   */
  public static function delete($idMantenimiento){
      $mantenimiento = new Mantenimiento();
      $mantenimiento->setIdMantenimiento($idMantenimiento); 

     $mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getMantenimientoDao(self::getDataBaseDefault());
     $mantenimientoDao->delete($mantenimiento);
     $mantenimientoDao->close();
  }

  /**
   * Lista todos los objetos Mantenimiento de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Mantenimiento en base de datos o Null
   */
  public static function listAll(){
     $mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getMantenimientoDao(self::getDataBaseDefault());
     $result = $mantenimientoDao->listAll();
     $mantenimientoDao->close();
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