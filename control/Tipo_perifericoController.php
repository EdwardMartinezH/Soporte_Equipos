<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Tipo_periferico.php';
require_once realpath("..").'\dao\interfaz\Tipo_perifericoDao.php';

class Tipo_perifericoController {

  /**
   * Crea un objeto Tipo_periferico a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function insert( $id,  $nombre){
      $tipo_periferico = new Tipo_periferico();
      $tipo_periferico->setId($id); 
      $tipo_periferico->setNombre($nombre); 

     $tipo_perifericoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_perifericoDao(self::getDataBaseDefault());
     $rtn = $tipo_perifericoDao->insert($tipo_periferico);
     $tipo_perifericoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Tipo_periferico de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $tipo_periferico = new Tipo_periferico();
      $tipo_periferico->setId($id); 

     $tipo_perifericoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_perifericoDao(self::getDataBaseDefault());
     $result = $tipo_perifericoDao->select($tipo_periferico);
     $tipo_perifericoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Tipo_periferico  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   */
  public static function update($id, $nombre){
      $tipo_periferico = self::select($id);
      $tipo_periferico->setNombre($nombre); 

     $tipo_perifericoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_perifericoDao(self::getDataBaseDefault());
     $tipo_perifericoDao->update($tipo_periferico);
     $tipo_perifericoDao->close();
  }

  /**
   * Elimina un objeto Tipo_periferico de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $tipo_periferico = new Tipo_periferico();
      $tipo_periferico->setId($id); 

     $tipo_perifericoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_perifericoDao(self::getDataBaseDefault());
     $tipo_perifericoDao->delete($tipo_periferico);
     $tipo_perifericoDao->close();
  }

  /**
   * Lista todos los objetos Tipo_periferico de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Tipo_periferico en base de datos o Null
   */
  public static function listAll(){
     $tipo_perifericoDao =FactoryDao::getFactory(self::getGestorDefault())->getTipo_perifericoDao(self::getDataBaseDefault());
     $result = $tipo_perifericoDao->listAll();
     $tipo_perifericoDao->close();
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