<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Santos frameworks Batman!  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Problema.php';
require_once realpath("..").'\dao\interfaz\ProblemaDao.php';

class ProblemaController {

  /**
   * Crea un objeto Problema a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProblema
   * @param problema
   * @param equipo_idEquipo
   * @param fecha_registro
   */
  public static function insert( $idProblema,  $desproblema,  $equipo_idEquipo,  $fecha_registro){
      $problema = new Problema();
      $problema->setIdProblema($idProblema); 
      $problema->setProblema($desproblema); 
      $problema->setEquipo_idEquipo($equipo_idEquipo); 
      $problema->setFecha_registro($fecha_registro); 

     $problemaDao =FactoryDao::getFactory(self::getGestorDefault())->getProblemaDao(self::getDataBaseDefault());
     $rtn = $problemaDao->insert($problema);
     $problemaDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Problema de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProblema
   * @return El objeto en base de datos o Null
   */
  public static function select($idProblema){
      $problema = new Problema();
      $problema->setIdProblema($idProblema); 

     $problemaDao =FactoryDao::getFactory(self::getGestorDefault())->getProblemaDao(self::getDataBaseDefault());
     $result = $problemaDao->select($problema);
     $problemaDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Problema  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProblema
   * @param problema
   * @param equipo_idEquipo
   * @param fecha_registro
   */
  public static function update($idProblema, $problema, $equipo_idEquipo, $fecha_registro){
      $problema = self::select($idProblema);
      $problema->setProblema($problema); 
      $problema->setEquipo_idEquipo($equipo_idEquipo); 
      $problema->setFecha_registro($fecha_registro); 

     $problemaDao =FactoryDao::getFactory(self::getGestorDefault())->getProblemaDao(self::getDataBaseDefault());
     $problemaDao->update($problema);
     $problemaDao->close();
  }

  /**
   * Elimina un objeto Problema de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idProblema
   */
  public static function delete($idProblema){
      $problema = new Problema();
      $problema->setIdProblema($idProblema); 

     $problemaDao =FactoryDao::getFactory(self::getGestorDefault())->getProblemaDao(self::getDataBaseDefault());
     $problemaDao->delete($problema);
     $problemaDao->close();
  }

  /**
   * Lista todos los objetos Problema de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Problema en base de datos o Null
   */
  public static function listAll(){
     $problemaDao =FactoryDao::getFactory(self::getGestorDefault())->getProblemaDao(self::getDataBaseDefault());
     $result = $problemaDao->listAll();
     $problemaDao->close();
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
