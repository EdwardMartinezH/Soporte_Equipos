<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    
/*  Querido programador:
    Al escribir esto estoy triste. Nuestro presidente ha sido derrocado Y REEMPLAZADO POR EL BENÉVOLO SEÑOR ARCINIEGAS.
    TODOS AMAMOS A ARCINIEGAS Y A SU GLORIOSO RÉGIMEN.
    CON AMOR, EL EQUIPO DE ANARCHY
*/
//  \(x.x)/  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\MantenimientoDao.php';
include_once realpath('..').'\dto\Mantenimiento.php';

class MySqlMantenimientoDao implements MantenimientoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($mantenimiento){
      $idMantenimiento=$mantenimiento->getIdMantenimiento();
$feha_mantenimiento=$mantenimiento->getFeha_mantenimiento();
$observaciones=$mantenimiento->getObservaciones();

      try {
          $sql= "INSERT INTO `mantenimiento`( `idMantenimiento`, `feha_mantenimiento`, `observaciones`)"
          ."VALUES ('$idMantenimiento','$feha_mantenimiento','$observaciones')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($mantenimiento){
      $idMantenimiento=$mantenimiento->getIdMantenimiento();

      try {
          $sql= "SELECT `idMantenimiento`, `feha_mantenimiento`, `observaciones`"
          ."FROM `mantenimiento`"
          ."WHERE `idMantenimiento`='$idMantenimiento'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $mantenimiento->setIdMantenimiento($data[$i]['idMantenimiento']);
          $mantenimiento->setFeha_mantenimiento($data[$i]['feha_mantenimiento']);
          $mantenimiento->setObservaciones($data[$i]['observaciones']);

          }
      return $mantenimiento;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($mantenimiento){
      $idMantenimiento=$mantenimiento->getIdMantenimiento();
$feha_mantenimiento=$mantenimiento->getFeha_mantenimiento();
$observaciones=$mantenimiento->getObservaciones();

      try {
          $sql= "UPDATE `mantenimiento` SET`idMantenimiento`='$idMantenimiento' ,`feha_mantenimiento`='$feha_mantenimiento' ,`observaciones`='$observaciones' WHERE `idMantenimiento`='$idMantenimiento'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Mantenimiento en la base de datos.
     * @param mantenimiento objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($mantenimiento){
      $idMantenimiento=$mantenimiento->getIdMantenimiento();

      try {
          $sql ="DELETE FROM `mantenimiento` WHERE `idMantenimiento`='$idMantenimiento'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Mantenimiento en la base de datos.
     * @return ArrayList<Mantenimiento> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idMantenimiento`, `feha_mantenimiento`, `observaciones`"
          ."FROM `mantenimiento`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $mantenimiento= new Mantenimiento();
          $mantenimiento->setIdMantenimiento($data[$i]['idMantenimiento']);
          $mantenimiento->setFeha_mantenimiento($data[$i]['feha_mantenimiento']);
          $mantenimiento->setObservaciones($data[$i]['observaciones']);

          array_push($lista,$mantenimiento);
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