<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Alguna vez Anarchy se llamó Molotov ( u.u) //Nostalgia  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\ProblemaDao.php';
include_once realpath('..').'\dto\Problema.php';

class MySqlProblemaDao implements ProblemaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Problema en la base de datos.
     * @param problema objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($problema){
      $idProblema=$problema->getIdProblema();
$descproblema=$problema->getProblema();
$equipo_idEquipo=$problema->getEquipo_idEquipo();
$fecha_registro=$problema->getFecha_registro();

      try {
          $sql= "INSERT INTO `problema`( `idProblema`, `problema`, `Equipo_idEquipo`, `fecha_registro`)"
          ."VALUES ('$idProblema','$descproblema','$equipo_idEquipo',DEFAULT)";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Problema en la base de datos.
     * @param problema objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($problema){
      $idProblema=$problema->getIdProblema();

      try {
          $sql= "SELECT `idProblema`, `problema`, `Equipo_idEquipo`, `fecha_registro`"
          ."FROM `problema`"
          ."WHERE `idProblema`='$idProblema'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $problema->setIdProblema($data[$i]['idProblema']);
          $problema->setProblema($data[$i]['problema']);
          $problema->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $problema->setFecha_registro($data[$i]['fecha_registro']);

          }
      return $problema;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Problema en la base de datos.
     * @param problema objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($problema){
      $idProblema=$problema->getIdProblema();
$problema=$problema->getProblema();
$equipo_idEquipo=$problema->getEquipo_idEquipo();
$fecha_registro=$problema->getFecha_registro();

      try {
          $sql= "UPDATE `problema` SET`idProblema`='$idProblema' ,`problema`='$problema' ,`Equipo_idEquipo`='$equipo_idEquipo' ,`fecha_registro`='$fecha_registro' WHERE `idProblema`='$idProblema'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Problema en la base de datos.
     * @param problema objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($problema){
      $idProblema=$problema->getIdProblema();

      try {
          $sql ="DELETE FROM `problema` WHERE `idProblema`='$idProblema'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Problema en la base de datos.
     * @return ArrayList<Problema> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idProblema`, `problema`, `Equipo_idEquipo`, `fecha_registro`"
          ."FROM `problema`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $problema= new Problema();
          $problema->setIdProblema($data[$i]['idProblema']);
          $problema->setProblema($data[$i]['problema']);
          $problema->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $problema->setFecha_registro($data[$i]['fecha_registro']);

          array_push($lista,$problema);
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
