<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Don´t call me gringo you f%&ing beanner  \\

require_once realpath("..").'\dao\factory\FactoryDao.php';
require_once realpath("..").'\dto\Usuario.php';
require_once realpath("..").'\dao\interfaz\UsuarioDao.php';

class UsuarioController {

  /**
   * Crea un objeto Usuario a partir de sus parámetros y lo guarda en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param contraseña
   * @param estado
   * @param correo
   * @param cargo_id
   */
  public static function insert( $id,  $nombre,  $contraseña,  $estado,  $correo,  $cargo_id){
      $usuario = new Usuario();
      $usuario->setId($id); 
      $usuario->setNombre($nombre); 
      $usuario->setContraseña($contraseña); 
      $usuario->setEstado($estado); 
      $usuario->setCorreo($correo); 
      $usuario->setCargo_id($cargo_id); 

     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $rtn = $usuarioDao->insert($usuario);
     $usuarioDao->close();
     return $rtn;
  }

  /**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function select($id){
      $usuario = new Usuario();
      $usuario->setId($id); 

     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->select($usuario);
     $usuarioDao->close();
     return $result;
  }
/**
   * Selecciona un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @return El objeto en base de datos o Null
   */
  public static function login($cargoId){
      $usuario = new Usuario();
      $usuario->setCargo_id($cargoId); 

     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->login($usuario);
     $usuarioDao->close();
     return $result;
  }
  /**
   * Modifica los atributos de un objeto Usuario  ya existente en base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   * @param nombre
   * @param contraseña
   * @param estado
   * @param correo
   * @param cargo_id
   */
  public static function update($id, $nombre, $contraseña, $estado, $correo, $cargo_id){
      $usuario = self::select($id);
      $usuario->setNombre($nombre); 
      $usuario->setContraseña($contraseña); 
      $usuario->setEstado($estado); 
      $usuario->setCorreo($correo); 
      $usuario->setCargo_id($cargo_id); 

     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $usuarioDao->update($usuario);
     $usuarioDao->close();
  }

  /**
   * Elimina un objeto Usuario de la base de datos a partir de su(s) llave(s) primaria(s).
   * Puede recibir NullPointerException desde los métodos del Dao
   * @param id
   */
  public static function delete($id){
      $usuario = new Usuario();
      $usuario->setId($id); 

     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $usuarioDao->delete($usuario);
     $usuarioDao->close();
  }

  /**
   * Lista todos los objetos Usuario de la base de datos.
   * Puede recibir NullPointerException desde los métodos del Dao
   * @return $result Array con los objetos Usuario en base de datos o Null
   */
  public static function listAll(){
     $usuarioDao =FactoryDao::getFactory(self::getGestorDefault())->getUsuarioDao(self::getDataBaseDefault());
     $result = $usuarioDao->listAll();
     $usuarioDao->close();
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