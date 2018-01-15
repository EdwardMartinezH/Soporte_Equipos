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

    /**
     * Guarda un objeto Equipo en la base de datos.
     * @param equipo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($equipo){
      $idEquipo=$equipo->getIdEquipo();
$usuario_Id=$equipo->getUsuario_Id();

      try {
          $sql= "INSERT INTO `equipo`( `idEquipo`, `usuario_Id`)"
          ."VALUES ('$idEquipo','$usuario_Id')";
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
          $sql= "SELECT `idEquipo`, `usuario_Id`"
          ."FROM `equipo`"
          ."WHERE `idEquipo`='$idEquipo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo->setIdEquipo($data[$i]['idEquipo']);
          $equipo->setUsuario_Id($data[$i]['usuario_Id']);

          }
      return $equipo;      } catch (SQLException $e) {
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
          $sql= "SELECT `idEquipo`, `usuario_Id`"
          ."FROM `equipo`"
          ."WHERE `usuario_Id`='$idUsuario'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo->setIdEquipo($data[$i]['idEquipo']);
          $equipo->setUsuario_Id($data[$i]['usuario_Id']);

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
$usuario_Id=$equipo->getUsuario_Id();

      try {
          $sql= "UPDATE `equipo` SET`idEquipo`='$idEquipo' ,`usuario_Id`='$usuario_Id' WHERE `idEquipo`='$idEquipo'";
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
          $sql ="SELECT `idEquipo`, `usuario_Id`"
          ."FROM `equipo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $equipo= new Equipo();
          $equipo->setIdEquipo($data[$i]['idEquipo']);
          $equipo->setUsuario_Id($data[$i]['usuario_Id']);

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