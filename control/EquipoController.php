<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    No es una cola ni es una pila, es tu proyecto que no compila  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Equipo.php';
require_once realpath("..").'\dao\interfaz\EquipoDao.php';

class EquipoController {

    /**
   * Crea un objeto Equipo a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idEquipo
   * @param usuario_Id
   * @param tipo_equipo_id
   */
  public static function insert($usuario_Id,  $tipo_equipo_id){
      $equipo = new Equipo();    
      $equipo->setUsuario_Id($usuario_Id); 
      $equipo->setTipo_equipo_id($tipo_equipo_id); 

     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $rtn = $equipoDao->insert($equipo);
     $equipoDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Equipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idEquipo
   * @return El objeto en base de datos o Null
   */
  public static function select($idEquipo){
      $equipo = new Equipo();
      $equipo->setIdEquipo($idEquipo); 

     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $result = $equipoDao->select($equipo);
     $equipoDao->close();
     return $result;
  }

  /**
   * Modifica los atributos de un objeto Equipo  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idEquipo
   * @param usuario_Id
   * @param tipo_equipo_id
   */
  public static function update($idEquipo, $usuario_Id, $tipo_equipo_id){
      $equipo = self::select($idEquipo);
      $equipo->setUsuario_Id($usuario_Id); 
      $equipo->setTipo_equipo_id($tipo_equipo_id); 

     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $equipoDao->update($equipo);
     $equipoDao->close();
  }

  /**
   * Elimina un objeto Equipo de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param idEquipo
   */
  public static function delete($idEquipo){
      $equipo = new Equipo();
      $equipo->setIdEquipo($idEquipo); 

     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $equipoDao->delete($equipo);
     $equipoDao->close();
  }

  /**
   * Lista todos los objetos Equipo de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Equipo en base de datos o Null
   */
  public static function listAll(){
     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $result = $equipoDao->listAll();
     $equipoDao->close();
     return $result;
  }
  public static function listByTipoEquipo($tipo_equipo_id){
     $equipo=new Equipo();
     $equipo->setTipo_equipo_id($tipo_equipo_id);
     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $result = $equipoDao->listByTipoEquipo($equipo);
     $equipoDao->close();
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

    public static function selectByUsuario($idUsuario) {
        $equipo = new Equipo();
      $equipo->setUsuario_Id($idUsuario); 

     $equipoDao =FactoryDao::getFactory(self::getGestorDefault())->getEquipoDao(self::getDataBaseDefault());
     $result = $equipoDao->selectByUsuario($equipo);
     $equipoDao->close();
     return $result;
    }

}
//That´s all folks!
