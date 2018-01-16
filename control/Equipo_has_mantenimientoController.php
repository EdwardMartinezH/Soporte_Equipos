<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...con el mayor de los disgustos, el benévolo señor Arciniegas.  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Equipo_has_mantenimiento.php';
require_once realpath("..").'\dao\interfaz\Equipo_has_mantenimientoDao.php';

class Equipo_has_mantenimientoController {

  /**
   * Crea un objeto Equipo_has_mantenimiento a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param equipo_idEquipo
   * @param mantenimiento_idMantenimiento
   */
  public static function insert( $equipo_idEquipo,  $mantenimiento_idMantenimiento){
      $equipo_has_mantenimiento = new Equipo_has_mantenimiento();
      $equipo_has_mantenimiento->setEquipo_idEquipo($equipo_idEquipo); 
      $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($mantenimiento_idMantenimiento); 

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $rtn = $equipo_has_mantenimientoDao->insert($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Equipo_has_mantenimiento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param equipo_idEquipo
   * @param mantenimiento_idMantenimiento
   * @return El objeto en base de datos o Null
   */
  public static function select($equipo_idEquipo, $mantenimiento_idMantenimiento){
      $equipo_has_mantenimiento = new Equipo_has_mantenimiento();
      $equipo_has_mantenimiento->setEquipo_idEquipo($equipo_idEquipo); 
      $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($mantenimiento_idMantenimiento); 

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $result = $equipo_has_mantenimientoDao->select($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Equipo_has_mantenimiento  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param equipo_idEquipo
   * @param mantenimiento_idMantenimiento
   */
  public static function update($equipo_idEquipo, $mantenimiento_idMantenimiento){
      $equipo_has_mantenimiento = self::select($equipo_idEquipo, $mantenimiento_idMantenimiento);

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $equipo_has_mantenimientoDao->update($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
  }

  /**
   * Elimina un objeto Equipo_has_mantenimiento de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param equipo_idEquipo
   * @param mantenimiento_idMantenimiento
   */
  public static function delete($equipo_idEquipo, $mantenimiento_idMantenimiento){
      $equipo_has_mantenimiento = new Equipo_has_mantenimiento();
      $equipo_has_mantenimiento->setEquipo_idEquipo($equipo_idEquipo); 
      $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($mantenimiento_idMantenimiento); 

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $equipo_has_mantenimientoDao->delete($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
  }

  /**
   * Lista todos los objetos Equipo_has_mantenimiento de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Equipo_has_mantenimiento en base de datos o Null
   */
  public static function listAll(){
     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $result = $equipo_has_mantenimientoDao->listAll();
     $equipo_has_mantenimientoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Equipo_has_mantenimiento de la base de datos a partir de equipo_idEquipo.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param equipo_idEquipo
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByEquipo_idEquipo($equipo_idEquipo){
      $equipo_has_mantenimiento = new Equipo_has_mantenimiento();
      $equipo_has_mantenimiento->setEquipo_idEquipo($equipo_idEquipo); 

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $result = $equipo_has_mantenimientoDao->listByEquipo_idEquipo($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
     return $result;
  }

  /**
   * Lista todos los objetos Equipo_has_mantenimiento de la base de datos a partir de mantenimiento_idMantenimiento.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param mantenimiento_idMantenimiento
   * @return $result Array con los objetos en base de datos o Null
   */
  public static function listByMantenimiento_idMantenimiento($mantenimiento_idMantenimiento){
      $equipo_has_mantenimiento = new Equipo_has_mantenimiento();
      $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($mantenimiento_idMantenimiento); 

     $equipo_has_mantenimientoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipo_has_mantenimientoDao(self::getDataBaseDefault());
     $result = $equipo_has_mantenimientoDao->listByMantenimiento_idMantenimiento($equipo_has_mantenimiento);
     $equipo_has_mantenimientoDao->close();
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