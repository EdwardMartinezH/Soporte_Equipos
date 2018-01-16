<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Y si mejor estudias comunicación?  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Tipo_pantalla.php';
require_once realpath("..").'\dao\interfaz\Tipo_pantallaDao.php';

class Tipo_pantallaController {

  /**
   * Crea un objeto Tipo_pantalla a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTipo_Pantalla
   * @param nombre
   */
  public static function insert( $idTipo_Pantalla,  $nombre){
      $tipo_pantalla = new Tipo_pantalla();
      $tipo_pantalla->setIdTipo_Pantalla($idTipo_Pantalla); 
      $tipo_pantalla->setNombre($nombre); 

     $tipo_pantallaDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_pantallaDao(self::getDataBaseDefault());
     $rtn = $tipo_pantallaDao->insert($tipo_pantalla);
     $tipo_pantallaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipo_pantalla de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTipo_Pantalla
   * @return El objeto en base de datos o Null
   */
  public static function select($idTipo_Pantalla){
      $tipo_pantalla = new Tipo_pantalla();
      $tipo_pantalla->setIdTipo_Pantalla($idTipo_Pantalla); 

     $tipo_pantallaDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_pantallaDao(self::getDataBaseDefault());
     $result = $tipo_pantallaDao->select($tipo_pantalla);
     $tipo_pantallaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipo_pantalla  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTipo_Pantalla
   * @param nombre
   */
  public static function update($idTipo_Pantalla, $nombre){
      $tipo_pantalla = self::select($idTipo_Pantalla);
      $tipo_pantalla->setNombre($nombre); 

     $tipo_pantallaDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_pantallaDao(self::getDataBaseDefault());
     $tipo_pantallaDao->update($tipo_pantalla);
     $tipo_pantallaDao->close();
  }

  /**
   * Elimina un objeto Tipo_pantalla de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idTipo_Pantalla
   */
  public static function delete($idTipo_Pantalla){
      $tipo_pantalla = new Tipo_pantalla();
      $tipo_pantalla->setIdTipo_Pantalla($idTipo_Pantalla); 

     $tipo_pantallaDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_pantallaDao(self::getDataBaseDefault());
     $tipo_pantallaDao->delete($tipo_pantalla);
     $tipo_pantallaDao->close();
  }

  /**
   * Lista todos los objetos Tipo_pantalla de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipo_pantalla en base de datos o Null
   */
  public static function listAll(){
     $tipo_pantallaDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_pantallaDao(self::getDataBaseDefault());
     $result = $tipo_pantallaDao->listAll();
     $tipo_pantallaDao->close();
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