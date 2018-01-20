<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Podrías agradecernos con unos cuantos billetes _/(n.n)\_  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\EquipoDao.php';
include_once realpath('..').'\dto\Equipo.php';

class MySqlEquipoDao implements EquipoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

     public function insert($equipo){    
$usuario_Id=$equipo->getUsuario_Id();
$tipo_equipo_id=$equipo->getTipo_equipo_id();

      try {
          $sql= "INSERT INTO `equipo`( `usuario_Id`, `tipo_equipo_id`)"
          ."VALUES ($usuario_Id,$tipo_equipo_id)";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Equipo en la base de datos.
     * @param equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($equipo){
      $idEquipo=$equipo->getIdEquipo();

      try {
          $sql= "SELECT `idEquipo`, `usuario_Id`, `tipo_equipo_id`"
          ."FROM `equipo`"
          ."WHERE `idEquipo`='$idEquipo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo->setIdEquipo($data[$i]['idEquipo']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_Id']);
           $equipo->setUsuario_Id($usuario);
           $tipo_equipo = new Tipo_equipo();
           $tipo_equipo->setId_tipo_equipo($data[$i]['tipo_equipo_id']);
           $equipo->setTipo_equipo_id($tipo_equipo);

          }
      return $equipo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Equipo en la base de datos.
     * @param equipo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($equipo){
      $idEquipo=$equipo->getIdEquipo();
$usuario_Id=$equipo->getUsuario_Id()->getId();
$tipo_equipo_id=$equipo->getTipo_equipo_id()->getId_tipo_equipo();

      try {
          $sql= "UPDATE `equipo` SET`idEquipo`='$idEquipo' ,`usuario_Id`='$usuario_Id' ,`tipo_equipo_id`='$tipo_equipo_id' WHERE `idEquipo`='$idEquipo'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Equipo en la base de datos.
     * @param equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($equipo){
      $idEquipo=$equipo->getIdEquipo();

      try {
          $sql ="DELETE FROM `equipo` WHERE `idEquipo`='$idEquipo'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Equipo en la base de datos.
     * @return ArrayList<Equipo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idEquipo`, `usuario_Id`, `tipo_equipo_id`"
          ."FROM `equipo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $equipo= new Equipo();
          $equipo->setIdEquipo($data[$i]['idEquipo']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_Id']);
           $equipo->setUsuario_Id($usuario);
           $tipo_equipo = new Tipo_equipo();
           $tipo_equipo->setId_tipo_equipo($data[$i]['tipo_equipo_id']);
           $equipo->setTipo_equipo_id($tipo_equipo);

          array_push($lista,$equipo);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
/**
     * Busca un objeto Equipo en la base de datos.
     * @param equipo objeto con el idUsuario a consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function selectByUsuario($equipo){
      $idUsuario=$equipo->getUsuario_Id();
      try {
          $sql= "SELECT `idEquipo`, `usuario_Id`, `tipo_equipo_id`"
          ."FROM `equipo`"
          ."WHERE `usuario_Id`='$idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo->setIdEquipo($data[$i]['idEquipo']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_Id']);
           $equipo->setUsuario_Id($usuario);
           $tipo_equipo = new Tipo_equipo();
           $tipo_equipo->setId_tipo_equipo($data[$i]['tipo_equipo_id']);
           $equipo->setTipo_equipo_id($tipo_equipo);

          }
      return $equipo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }
  public function listByTipoEquipo($equipo) {
       $lista = array();
       $tipo=$equipo->getTipo_equipo_id();
      try {
          $sql ="SELECT `idEquipo`, `usuario_Id`, `tipo_equipo_id`"
          ."FROM `equipo`"
          ."WHERE `tipo_equipo_id`=$tipo";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $equipo= new Equipo();
          $equipo->setIdEquipo($data[$i]['idEquipo']);
           $usuario = new Usuario();
           $usuario->setId($data[$i]['usuario_Id']);
           $equipo->setUsuario_Id($usuario);
           $tipo_equipo = new Tipo_equipo();
           $tipo_equipo->setId_tipo_equipo($data[$i]['tipo_equipo_id']);
           $equipo->setTipo_equipo_id($tipo_equipo);

          array_push($lista,$equipo);
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



}
//That´s all folks!
