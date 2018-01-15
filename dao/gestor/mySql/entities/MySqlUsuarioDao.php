<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\UsuarioDao.php';
include_once realpath('..').'\dto\Usuario.php';

class MySqlUsuarioDao implements UsuarioDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Usuario en la base de datos.
     * @param usuario objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($usuario){
      $id=$usuario->getId();
$nombre=$usuario->getNombre();
$contraseña=$usuario->getContraseña();
$estado=$usuario->getEstado();
$correo=$usuario->getCorreo();
$cargo_id=$usuario->getCargo_id();

      try {
          $sql= "INSERT INTO `usuario`( `Id`, `Nombre`, `Contraseña`, `Estado`, `correo`, `Cargo_id`)"
          ."VALUES ('$id','$nombre','$contraseña','$estado','$correo','$cargo_id')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($usuario){
      $id=$usuario->getId();

      try {
          $sql= "SELECT `Id`, `Nombre`, `Contraseña`, `Estado`, `correo`, `Cargo_id`"
          ."FROM `usuario`"
          ."WHERE `Id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setId($data[$i]['Id']);
          $usuario->setNombre($data[$i]['Nombre']);
          $usuario->setContraseña($data[$i]['Contraseña']);
          $usuario->setEstado($data[$i]['Estado']);
          $usuario->setCorreo($data[$i]['correo']);
          $usuario->setCargo_id($data[$i]['Cargo_id']);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Usuario en la base de datos.
     * @param usuario objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($usuario){
      $id=$usuario->getId();
$nombre=$usuario->getNombre();
$contraseña=$usuario->getContraseña();
$estado=$usuario->getEstado();
$correo=$usuario->getCorreo();
$cargo_id=$usuario->getCargo_id();

      try {
          $sql= "UPDATE `usuario` SET`Id`='$id' ,`Nombre`='$nombre' ,`Contraseña`='$contraseña' ,`Estado`='$estado' ,`correo`='$correo' ,`Cargo_id`='$cargo_id' WHERE `Id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Usuario en la base de datos.
     * @param usuario objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($usuario){
      $id=$usuario->getId();

      try {
          $sql ="DELETE FROM `usuario` WHERE `Id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Usuario en la base de datos.
     * @return ArrayList<Usuario> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `Id`, `Nombre`, `Contraseña`, `Estado`, `correo`, `Cargo_id`"
          ."FROM `usuario`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $usuario= new Usuario();
          $usuario->setId($data[$i]['Id']);
          $usuario->setNombre($data[$i]['Nombre']);
          $usuario->setContraseña($data[$i]['Contraseña']);
          $usuario->setEstado($data[$i]['Estado']);
          $usuario->setCorreo($data[$i]['correo']);
          $usuario->setCargo_id($data[$i]['Cargo_id']);

          array_push($lista,$usuario);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

      public function insertarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $sentencia = null;
          return $this->cn->lastInsertId();
    }
      public function ejecutarConsulta($sql){
          $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sentencia=$this->cn->prepare($sql);
          $sentencia->execute(); 
          $data = $sentencia->fetchAll();
          $sentencia = null;
          return $data;
    }
    /**
     * Cierra la conexión actual a la base de datos
     */
  public function close(){
      $cn=null;
  }

    public function login($usuario) {
         $id=$usuario->getCargo_id();
      try {
          $sql= "SELECT `Id`, `Nombre`, `Contraseña`, `Estado`, `correo`, `Cargo_id`"
          ."FROM `usuario`"
          ."WHERE `Cargo_id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $usuario->setId($data[$i]['Id']);
          $usuario->setNombre($data[$i]['Nombre']);
          $usuario->setContraseña($data[$i]['Contraseña']);
          $usuario->setEstado($data[$i]['Estado']);
          $usuario->setCorreo($data[$i]['correo']);
          $usuario->setCargo_id($data[$i]['Cargo_id']);

          }
      return $usuario;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
    }

}
//That´s all folks!