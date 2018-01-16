<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Cargo.php';
require_once realpath("..").'\dao\interfaz\CargoDao.php';

class CargoController {

  /**
   * Crea un objeto Cargo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function insert( $id,  $nombre){
      $cargo = new Cargo();
      $cargo->setId($id); 
      $cargo->setNombre($nombre); 

     $cargoDao =FactoryDao::getFactory(self::getGestorDefault())->getCargoDao(self::getDataBaseDefault());
     $rtn = $cargoDao->insert($cargo);
     $cargoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Cargo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $cargo = new Cargo();
      $cargo->setId($id); 

     $cargoDao =FactoryDao::getFactory(self::getGestorDefault())->getCargoDao(self::getDataBaseDefault());
     $result = $cargoDao->select($cargo);
     $cargoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Cargo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function update($id, $nombre){
      $cargo = self::select($id);
      $cargo->setNombre($nombre); 

     $cargoDao =FactoryDao::getFactory(self::getGestorDefault())->getCargoDao(self::getDataBaseDefault());
     $cargoDao->update($cargo);
     $cargoDao->close();
  }

  /**
   * Elimina un objeto Cargo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $cargo = new Cargo();
      $cargo->setId($id); 

     $cargoDao =FactoryDao::getFactory(self::getGestorDefault())->getCargoDao(self::getDataBaseDefault());
     $cargoDao->delete($cargo);
     $cargoDao->close();
  }

  /**
   * Lista todos los objetos Cargo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Cargo en base de datos o Null
   */
  public static function listAll(){
     $cargoDao =FactoryDao::getFactory(self::getGestorDefault())->getCargoDao(self::getDataBaseDefault());
     $result = $cargoDao->listAll();
     $cargoDao->close();
     return $result;
  }

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

}
//That´s all folks!