<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Sabias que Anarchy se generó a sí mismo?  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Calidad.php';
require_once realpath("..").'\dao\interfaz\CalidadDao.php';

class CalidadController {

  /**
   * Crea un objeto Calidad a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcalidad
   * @param clave
   * @param bloquea
   * @param bloqueu_automatico
   * @param copia_seguridad
   * @param antivirus
   * @param progra_no_autorizado
   * @param comparte_archivos
   * @param cuenta_adm
   * @param observaciones
   * @param equipo_idEquipo
   */
  public static function insert( $idcalidad,  $clave,  $bloquea,  $bloqueu_automatico,  $copia_seguridad,  $antivirus,  $progra_no_autorizado,  $comparte_archivos,  $cuenta_adm,  $observaciones,  $equipo_idEquipo){
      $calidad = new Calidad();
      $calidad->setIdcalidad($idcalidad); 
      $calidad->setClave($clave); 
      $calidad->setBloquea($bloquea); 
      $calidad->setBloqueu_automatico($bloqueu_automatico); 
      $calidad->setCopia_seguridad($copia_seguridad); 
      $calidad->setAntivirus($antivirus); 
      $calidad->setProgra_no_autorizado($progra_no_autorizado); 
      $calidad->setComparte_archivos($comparte_archivos); 
      $calidad->setCuenta_adm($cuenta_adm); 
      $calidad->setObservaciones($observaciones); 
      $calidad->setEquipo_idEquipo($equipo_idEquipo); 

     $calidadDao =FactoryDao::getFactory(self::getGestorDefault())->getCalidadDao(self::getDataBaseDefault());
     $rtn = $calidadDao->insert($calidad);
     $calidadDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Calidad de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcalidad
   * @return El objeto en base de datos o Null
   */
  public static function select($idcalidad){
      $calidad = new Calidad();
      $calidad->setIdcalidad($idcalidad); 

     $calidadDao =FactoryDao::getFactory(self::getGestorDefault())->getCalidadDao(self::getDataBaseDefault());
     $result = $calidadDao->select($calidad);
     $calidadDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Calidad  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcalidad
   * @param clave
   * @param bloquea
   * @param bloqueu_automatico
   * @param copia_seguridad
   * @param antivirus
   * @param progra_no_autorizado
   * @param comparte_archivos
   * @param cuenta_adm
   * @param observaciones
   * @param equipo_idEquipo
   */
  public static function update($idcalidad, $clave, $bloquea, $bloqueu_automatico, $copia_seguridad, $antivirus, $progra_no_autorizado, $comparte_archivos, $cuenta_adm, $observaciones, $equipo_idEquipo){
      $calidad = self::select($idcalidad);
      $calidad->setClave($clave); 
      $calidad->setBloquea($bloquea); 
      $calidad->setBloqueu_automatico($bloqueu_automatico); 
      $calidad->setCopia_seguridad($copia_seguridad); 
      $calidad->setAntivirus($antivirus); 
      $calidad->setProgra_no_autorizado($progra_no_autorizado); 
      $calidad->setComparte_archivos($comparte_archivos); 
      $calidad->setCuenta_adm($cuenta_adm); 
      $calidad->setObservaciones($observaciones); 
      $calidad->setEquipo_idEquipo($equipo_idEquipo); 

     $calidadDao =FactoryDao::getFactory(self::getGestorDefault())->getCalidadDao(self::getDataBaseDefault());
     $calidadDao->update($calidad);
     $calidadDao->close();
  }

  /**
   * Elimina un objeto Calidad de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idcalidad
   */
  public static function delete($idcalidad){
      $calidad = new Calidad();
      $calidad->setIdcalidad($idcalidad); 

     $calidadDao =FactoryDao::getFactory(self::getGestorDefault())->getCalidadDao(self::getDataBaseDefault());
     $calidadDao->delete($calidad);
     $calidadDao->close();
  }

  /**
   * Lista todos los objetos Calidad de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Calidad en base de datos o Null
   */
  public static function listAll(){
     $calidadDao =FactoryDao::getFactory(self::getGestorDefault())->getCalidadDao(self::getDataBaseDefault());
     $result = $calidadDao->listAll();
     $calidadDao->close();
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
