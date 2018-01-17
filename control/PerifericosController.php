<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Hey ¿cómo se llama tu café internet?  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Perifericos.php';
require_once realpath("..").'\dao\interfaz\PerifericosDao.php';

class PerifericosController {

  /**
   * Crea un objeto Perifericos a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param equipo_idEquipo
   * @param marca
   * @param modelo
   * @param serial
   * @param pulgadas
   * @param stiker_activo
   * @param fecha_compra
   * @param tipo_Periferico_id
   * @param tipo_Pantalla_idTipo_Pantalla
   */
  public static function insert( $id,  $equipo_idEquipo,  $marca,  $modelo,  $serial,  $pulgadas,  $stiker_activo,  $fecha_compra,  $tipo_Periferico_id,  $tipo_Pantalla_idTipo_Pantalla){
      $perifericos = new Perifericos();
      $perifericos->setId($id); 
      $perifericos->setEquipo_idEquipo($equipo_idEquipo); 
      $perifericos->setMarca($marca); 
      $perifericos->setModelo($modelo); 
      $perifericos->setSerial($serial); 
      $perifericos->setPulgadas($pulgadas); 
      $perifericos->setStiker_activo($stiker_activo); 
      $perifericos->setFecha_compra($fecha_compra); 
      $perifericos->setTipo_Periferico_id($tipo_Periferico_id); 
      $perifericos->setTipo_Pantalla_idTipo_Pantalla($tipo_Pantalla_idTipo_Pantalla); 

     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $rtn = $perifericosDao->insert($perifericos);
     $perifericosDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Perifericos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $perifericos = new Perifericos();
      $perifericos->setId($id); 

     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $result = $perifericosDao->select($perifericos);
     $perifericosDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Perifericos  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param equipo_idEquipo
   * @param marca
   * @param modelo
   * @param serial
   * @param pulgadas
   * @param stiker_activo
   * @param fecha_compra
   * @param tipo_Periferico_id
   * @param tipo_Pantalla_idTipo_Pantalla
   */
  public static function update($id, $equipo_idEquipo, $marca, $modelo, $serial, $pulgadas, $stiker_activo, $fecha_compra, $tipo_Periferico_id, $tipo_Pantalla_idTipo_Pantalla){
      $perifericos = self::select($id);
      $perifericos->setEquipo_idEquipo($equipo_idEquipo); 
      $perifericos->setMarca($marca); 
      $perifericos->setModelo($modelo); 
      $perifericos->setSerial($serial); 
      $perifericos->setPulgadas($pulgadas); 
      $perifericos->setStiker_activo($stiker_activo); 
      $perifericos->setFecha_compra($fecha_compra); 
      $perifericos->setTipo_Periferico_id($tipo_Periferico_id); 
      $perifericos->setTipo_Pantalla_idTipo_Pantalla($tipo_Pantalla_idTipo_Pantalla); 

     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $perifericosDao->update($perifericos);
     $perifericosDao->close();
  }

  /**
   * Elimina un objeto Perifericos de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $perifericos = new Perifericos();
      $perifericos->setId($id); 

     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $perifericosDao->delete($perifericos);
     $perifericosDao->close();
  }

  /**
   * Lista todos los objetos Perifericos de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Perifericos en base de datos o Null
   */
  public static function listAll(){
     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $result = $perifericosDao->listAll();
     $perifericosDao->close();
     return $result;
  }
public static function listByTipoPeriferico($tipo_Periferico){
     $periferico=new Perifericos();
     $periferico->setTipo_Periferico_id($tipo_Periferico);
     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $result = $perifericosDao->listByTipoPeriferico($periferico);
     $perifericosDao->close();
     return $result;
  }
  public static function listByTipoPantalla($tipo_Pantalla){
     $periferico=new Perifericos();
     $periferico->setTipo_Pantalla_idTipo_Pantalla($tipo_Pantalla);
     $perifericosDao =FactoryDao::getFactory(self::getGestorDefault())->getPerifericosDao(self::getDataBaseDefault());
     $result = $perifericosDao->listByTipoPantalla($periferico);
     $perifericosDao->close();
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
