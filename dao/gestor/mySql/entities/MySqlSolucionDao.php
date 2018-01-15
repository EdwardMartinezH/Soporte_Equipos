<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Estadistas informan que una linea de código equivale a un sorbo de café  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\SolucionDao.php';
include_once realpath('..').'\dto\Solucion.php';

class MySqlSolucionDao implements SolucionDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Solucion en la base de datos.
     * @param solucion objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($solucion){
     // $idSolucion=$solucion->getIdSolucion();
$problema_idProblema=$solucion->getProblema_idProblema();
$periféricos_idPeriféricos=$solucion->getPeriféricos_idPeriféricos();
$software_idSoftware=$solucion->getSoftware_idSoftware();
$torre_idTorre=$solucion->getTorre_idTorre();
$solucion=$solucion->getSolucion();

      try {
          $sql= "INSERT INTO `solucion`( `idSolucion`, `Problema_idProblema`, `Periféricos_idPeriféricos`, `Software_idSoftware`, `Torre_idTorre`, `fecha_Solucion`, `Solucion`)"
          ."VALUES (DEFAULT,'$problema_idProblema','$periféricos_idPeriféricos','$software_idSoftware','$torre_idTorre',DEFAULT,'$solucion')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Solucion en la base de datos.
     * @param solucion objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($solucion){
      $idSolucion=$solucion->getIdSolucion();

      try {
          $sql= "SELECT `idSolucion`, `Problema_idProblema`, `Periféricos_idPeriféricos`, `Software_idSoftware`, `Torre_idTorre`, `fecha_Solucion`, `Solucion`"
          ."FROM `solucion`"
          ."WHERE `idSolucion`='$idSolucion'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $solucion->setIdSolucion($data[$i]['idSolucion']);
          $solucion->setProblema_idProblema($data[$i]['Problema_idProblema']);
          $solucion->setPeriféricos_idPeriféricos($data[$i]['Periféricos_idPeriféricos']);
          $solucion->setSoftware_idSoftware($data[$i]['Software_idSoftware']);
          $solucion->setTorre_idTorre($data[$i]['Torre_idTorre']);
          $solucion->setFecha_Solucion($data[$i]['fecha_Solucion']);
          $solucion->setSolucion($data[$i]['Solucion']);

          }
      return $solucion;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Solucion en la base de datos.
     * @param solucion objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($solucion){
      $idSolucion=$solucion->getIdSolucion();
$problema_idProblema=$solucion->getProblema_idProblema();
$periféricos_idPeriféricos=$solucion->getPeriféricos_idPeriféricos();
$software_idSoftware=$solucion->getSoftware_idSoftware();
$torre_idTorre=$solucion->getTorre_idTorre();
$fecha_Solucion=$solucion->getFecha_Solucion();
$solucion=$solucion->getSolucion();

      try {
          $sql= "UPDATE `solucion` SET`idSolucion`='$idSolucion' ,`Problema_idProblema`='$problema_idProblema' ,`Periféricos_idPeriféricos`='$periféricos_idPeriféricos' ,`Software_idSoftware`='$software_idSoftware' ,`Torre_idTorre`='$torre_idTorre' ,`fecha_Solucion`='$fecha_Solucion' ,`Solucion`='$solucion' WHERE `idSolucion`='$idSolucion'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Solucion en la base de datos.
     * @param solucion objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($solucion){
      $idSolucion=$solucion->getIdSolucion();

      try {
          $sql ="DELETE FROM `solucion` WHERE `idSolucion`='$idSolucion'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Solucion en la base de datos.
     * @return ArrayList<Solucion> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idSolucion`, `Problema_idProblema`, `Periféricos_idPeriféricos`, `Software_idSoftware`, `Torre_idTorre`, `fecha_Solucion`, `Solucion`"
          ."FROM `solucion`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $solucion= new Solucion();
          $solucion->setIdSolucion($data[$i]['idSolucion']);
          $solucion->setProblema_idProblema($data[$i]['Problema_idProblema']);
          $solucion->setPeriféricos_idPeriféricos($data[$i]['Periféricos_idPeriféricos']);
          $solucion->setSoftware_idSoftware($data[$i]['Software_idSoftware']);
          $solucion->setTorre_idTorre($data[$i]['Torre_idTorre']);
          $solucion->setFecha_Solucion($data[$i]['fecha_Solucion']);
          $solucion->setSolucion($data[$i]['Solucion']);

          array_push($lista,$solucion);
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