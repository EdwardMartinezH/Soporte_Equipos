<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Torre.php';
require_once realpath("..").'\dao\interfaz\TorreDao.php';

class TorreController {

  /**
   * Crea un objeto Torre a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @param equipo_idEquipo
   * @param marca
   * @param modelo
   * @param serial
   * @param stiker_activo
   * @param fecha_compra
   */
  public static function insert( $idTorre,  $equipo_idEquipo,  $marca,  $modelo,  $serial,  $stiker_activo,  $fecha_compra){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 
      $torre->setEquipo_idEquipo($equipo_idEquipo); 
      $torre->setMarca($marca); 
      $torre->setModelo($modelo); 
      $torre->setSerial($serial); 
      $torre->setStiker_activo($stiker_activo); 
      $torre->setFecha_compra($fecha_compra); 

     $torreDao =FactoryDao::getFactory(self::getGestorDefault())->getTorreDao(self::getDataBaseDefault());
     $rtn = $torreDao->insert($torre);
     $torreDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Torre de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @return El objeto en base de datos o Null
   */
  public static function select($idTorre){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 

     $torreDao =FactoryDao::getFactory(self::getGestorDefault())->getTorreDao(self::getDataBaseDefault());
     $result = $torreDao->select($torre);
     $torreDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Torre  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   * @param equipo_idEquipo
   * @param marca
   * @param modelo
   * @param serial
   * @param stiker_activo
   * @param fecha_compra
   */
  public static function update($idTorre, $equipo_idEquipo, $marca, $modelo, $serial, $stiker_activo, $fecha_compra){
      $torre = self::select($idTorre);
      $torre->setEquipo_idEquipo($equipo_idEquipo); 
      $torre->setMarca($marca); 
      $torre->setModelo($modelo); 
      $torre->setSerial($serial); 
      $torre->setStiker_activo($stiker_activo); 
      $torre->setFecha_compra($fecha_compra); 

     $torreDao =FactoryDao::getFactory(self::getGestorDefault())->getTorreDao(self::getDataBaseDefault());
     $torreDao->update($torre);
     $torreDao->close();
  }

  /**
   * Elimina un objeto Torre de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTorre
   */
  public static function delete($idTorre){
      $torre = new Torre();
      $torre->setIdTorre($idTorre); 

     $torreDao =FactoryDao::getFactory(self::getGestorDefault())->getTorreDao(self::getDataBaseDefault());
     $torreDao->delete($torre);
     $torreDao->close();
  }

  /**
   * Lista todos los objetos Torre de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Torre en base de datos o Null
   */
  public static function listAll(){
     $torreDao =FactoryDao::getFactory(self::getGestorDefault())->getTorreDao(self::getDataBaseDefault());
     $result = $torreDao->listAll();
     $torreDao->close();
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