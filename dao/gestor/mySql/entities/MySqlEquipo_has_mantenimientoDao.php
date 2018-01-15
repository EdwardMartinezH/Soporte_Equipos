<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Tu alma nos pertenece... Salve Mr. Arciniegas  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\Equipo_has_mantenimientoDao.php';
include_once realpath('..').'\dto\Equipo_has_mantenimiento.php';

class MySqlEquipo_has_mantenimientoDao implements Equipo_has_mantenimientoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($equipo_has_mantenimiento){
      $equipo_idEquipo=$equipo_has_mantenimiento->getEquipo_idEquipo();
$mantenimiento_idMantenimiento=$equipo_has_mantenimiento->getMantenimiento_idMantenimiento();

      try {
          $sql= "INSERT INTO `equipo_has_mantenimiento`( `equipo_idEquipo`, `mantenimiento_idMantenimiento`)"
          ."VALUES ('$equipo_idEquipo','$mantenimiento_idMantenimiento')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($equipo_has_mantenimiento){
      $equipo_idEquipo=$equipo_has_mantenimiento->getEquipo_idEquipo();
$mantenimiento_idMantenimiento=$equipo_has_mantenimiento->getMantenimiento_idMantenimiento();

      try {
          $sql= "SELECT `equipo_idEquipo`, `mantenimiento_idMantenimiento`"
          ."FROM `equipo_has_mantenimiento`"
          ."WHERE `equipo_idEquipo`='$equipo_idEquipo' AND`mantenimiento_idMantenimiento`='$mantenimiento_idMantenimiento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo_has_mantenimiento->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);
          $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($data[$i]['mantenimiento_idMantenimiento']);

          }
      return $equipo_has_mantenimiento;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($equipo_has_mantenimiento){
      $equipo_idEquipo=$equipo_has_mantenimiento->getEquipo_idEquipo();
$mantenimiento_idMantenimiento=$equipo_has_mantenimiento->getMantenimiento_idMantenimiento();

      try {
          $sql= "UPDATE `equipo_has_mantenimiento` SET`equipo_idEquipo`='$equipo_idEquipo' ,`mantenimiento_idMantenimiento`='$mantenimiento_idMantenimiento' WHERE `equipo_idEquipo`='$equipo_idEquipo' ,`mantenimiento_idMantenimiento`='$mantenimiento_idMantenimiento'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($equipo_has_mantenimiento){
      $equipo_idEquipo=$equipo_has_mantenimiento->getEquipo_idEquipo();
$mantenimiento_idMantenimiento=$equipo_has_mantenimiento->getMantenimiento_idMantenimiento();

      try {
          $sql ="DELETE FROM `equipo_has_mantenimiento` WHERE `equipo_idEquipo`='$equipo_idEquipo' AND`mantenimiento_idMantenimiento`='$mantenimiento_idMantenimiento'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @return ArrayList<Equipo_has_mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `equipo_idEquipo`, `mantenimiento_idMantenimiento`"
          ."FROM `equipo_has_mantenimiento`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $equipo_has_mantenimiento= new Equipo_has_mantenimiento();
          $equipo_has_mantenimiento->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);
          $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($data[$i]['mantenimiento_idMantenimiento']);

          array_push($lista,$equipo_has_mantenimiento);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Equipo_has_mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByEquipo_idEquipo($equipo_has_mantenimiento){
      $lista = array();
      $equipo_idEquipo=$equipo_has_mantenimiento->getEquipo_idEquipo();

      try {
          $sql ="SELECT `equipo_idEquipo`, `mantenimiento_idMantenimiento`"
          ."FROM `equipo_has_mantenimiento`"
          ."WHERE `equipo_idEquipo`='$equipo_idEquipo'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo_has_mantenimiento->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);
          $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($data[$i]['mantenimiento_idMantenimiento']);

          array_push($lista,$equipo_has_mantenimiento);
          }
      return $lista;
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Busca un objeto Equipo_has_mantenimiento en la base de datos.
     * @param equipo_has_mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return ArrayList<Equipo_has_mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listByMantenimiento_idMantenimiento($equipo_has_mantenimiento){
      $lista = array();
      $mantenimiento_idMantenimiento=$equipo_has_mantenimiento->getMantenimiento_idMantenimiento();

      try {
          $sql ="SELECT `equipo_idEquipo`, `mantenimiento_idMantenimiento`"
          ."FROM `equipo_has_mantenimiento`"
          ."WHERE `mantenimiento_idMantenimiento`='$mantenimiento_idMantenimiento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $equipo_has_mantenimiento->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);
          $equipo_has_mantenimiento->setMantenimiento_idMantenimiento($data[$i]['mantenimiento_idMantenimiento']);

          array_push($lista,$equipo_has_mantenimiento);
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