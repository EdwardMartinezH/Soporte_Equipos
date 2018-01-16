<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Has encontrado la frase #1024 ¡Felicidades! Ahora tu proyecto funcionará a la primera  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Solucion.php';
require_once realpath("..").'\dao\interfaz\SolucionDao.php';

class SolucionController {

  /**
   * Crea un objeto Solucion a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSolucion
   * @param problema_idProblema
   * @param periféricos_idPeriféricos
   * @param software_idSoftware
   * @param torre_idTorre
   * @param fecha_Solucion
   * @param solucion
   */
  public static function insert( $idSolucion,  $problema_idProblema,  $periféricos_idPeriféricos,  $software_idSoftware,  $torre_idTorre,  $fecha_Solucion,  $solucion){
      $solucion = new Solucion();
      $solucion->setIdSolucion($idSolucion); 
      $solucion->setProblema_idProblema($problema_idProblema); 
      $solucion->setPeriféricos_idPeriféricos($periféricos_idPeriféricos); 
      $solucion->setSoftware_idSoftware($software_idSoftware); 
      $solucion->setTorre_idTorre($torre_idTorre); 
      $solucion->setFecha_Solucion($fecha_Solucion); 
      $solucion->setSolucion($solucion); 

     $solucionDao =FactoryDao::getFactory(self::getGestorDefault())->getSolucionDao(self::getDataBaseDefault());
     $rtn = $solucionDao->insert($solucion);
     $solucionDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Solucion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSolucion
   * @return El objeto en base de datos o Null
   */
  public static function select($idSolucion){
      $solucion = new Solucion();
      $solucion->setIdSolucion($idSolucion); 

     $solucionDao =FactoryDao::getFactory(self::getGestorDefault())->getSolucionDao(self::getDataBaseDefault());
     $result = $solucionDao->select($solucion);
     $solucionDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Solucion  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSolucion
   * @param problema_idProblema
   * @param periféricos_idPeriféricos
   * @param software_idSoftware
   * @param torre_idTorre
   * @param fecha_Solucion
   * @param solucion
   */
  public static function update($idSolucion, $problema_idProblema, $periféricos_idPeriféricos, $software_idSoftware, $torre_idTorre, $fecha_Solucion, $solucion){
      $solucion = self::select($idSolucion);
      $solucion->setProblema_idProblema($problema_idProblema); 
      $solucion->setPeriféricos_idPeriféricos($periféricos_idPeriféricos); 
      $solucion->setSoftware_idSoftware($software_idSoftware); 
      $solucion->setTorre_idTorre($torre_idTorre); 
      $solucion->setFecha_Solucion($fecha_Solucion); 
      $solucion->setSolucion($solucion); 

     $solucionDao =FactoryDao::getFactory(self::getGestorDefault())->getSolucionDao(self::getDataBaseDefault());
     $solucionDao->update($solucion);
     $solucionDao->close();
  }

  /**
   * Elimina un objeto Solucion de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idSolucion
   */
  public static function delete($idSolucion){
      $solucion = new Solucion();
      $solucion->setIdSolucion($idSolucion); 

     $solucionDao =FactoryDao::getFactory(self::getGestorDefault())->getSolucionDao(self::getDataBaseDefault());
     $solucionDao->delete($solucion);
     $solucionDao->close();
  }

  /**
   * Lista todos los objetos Solucion de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Solucion en base de datos o Null
   */
  public static function listAll(){
     $solucionDao =FactoryDao::getFactory(self::getGestorDefault())->getSolucionDao(self::getDataBaseDefault());
     $result = $solucionDao->listAll();
     $solucionDao->close();
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
