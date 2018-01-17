<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Bueno ¿y ahora qué?  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Tipo_equipo.php';
require_once realpath("..").'\dao\interfaz\Tipo_equipoDao.php';

class Tipo_equipoController {

  /**
   * Para su comodidad, defina aquí el gestor de conexión predilecto para esta entidad
   * @return idGestor Devuelve el identificador del gestor de conexión
   */
  private static function getGestorDefault(){
      return FactoryDao::$MYSQL_FACTORY;
  }
  /**
   * Para su comodidad, defina aquí el nombre de base de datos predilecto para esta entidad
   * @return dbName Devuelve el nombre de la base de datos a emplear
   */
  private static function getDataBaseDefault(){
      return "soporte";
  }
  /**
   * Crea un objeto Tipo_equipo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_tipo_equipo
   * @param nombre
   */
  public static function insert( $id_tipo_equipo,  $nombre){
      $tipo_equipo = new Tipo_equipo();
      $tipo_equipo->setId_tipo_equipo($id_tipo_equipo); 
      $tipo_equipo->setNombre($nombre); 

     $tipo_equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_equipoDao(self::getDataBaseDefault());
     $rtn = $tipo_equipoDao->insert($tipo_equipo);
     $tipo_equipoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipo_equipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_tipo_equipo
   * @return El objeto en base de datos o Null
   */
  public static function select($id_tipo_equipo){
      $tipo_equipo = new Tipo_equipo();
      $tipo_equipo->setId_tipo_equipo($id_tipo_equipo); 

     $tipo_equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_equipoDao(self::getDataBaseDefault());
     $result = $tipo_equipoDao->select($tipo_equipo);
     $tipo_equipoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipo_equipo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_tipo_equipo
   * @param nombre
   */
  public static function update($id_tipo_equipo, $nombre){
      $tipo_equipo = self::select($id_tipo_equipo);
      $tipo_equipo->setNombre($nombre); 

     $tipo_equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_equipoDao(self::getDataBaseDefault());
     $tipo_equipoDao->update($tipo_equipo);
     $tipo_equipoDao->close();
  }

  /**
   * Elimina un objeto Tipo_equipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id_tipo_equipo
   */
  public static function delete($id_tipo_equipo){
      $tipo_equipo = new Tipo_equipo();
      $tipo_equipo->setId_tipo_equipo($id_tipo_equipo); 

     $tipo_equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_equipoDao(self::getDataBaseDefault());
     $tipo_equipoDao->delete($tipo_equipo);
     $tipo_equipoDao->close();
  }

  /**
   * Lista todos los objetos Tipo_equipo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipo_equipo en base de datos o Null
   */
  public static function listAll(){
     $tipo_equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_equipoDao(self::getDataBaseDefault());
     $result = $tipo_equipoDao->listAll();
     $tipo_equipoDao->close();
     return $result;
  }


}
//That´s all folks!