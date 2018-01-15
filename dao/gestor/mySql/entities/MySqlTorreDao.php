<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    They call me Mr. Espagueti  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\TorreDao.php';
include_once realpath('..').'\dto\Torre.php';

class MySqlTorreDao implements TorreDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Torre en la base de datos.
     * @param torre objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($torre){
      $idTorre=$torre->getIdTorre();
$equipo_idEquipo=$torre->getEquipo_idEquipo();
$marca=$torre->getMarca();
$modelo=$torre->getModelo();
$serial=$torre->getSerial();
$stiker_activo=$torre->getStiker_activo();
$fecha_compra=$torre->getFecha_compra();

      try {
          $sql= "INSERT INTO `torre`( `idTorre`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `stiker_activo`, `fecha_compra`)"
          ."VALUES ('$idTorre','$equipo_idEquipo','$marca','$modelo','$serial','$stiker_activo','$fecha_compra')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($torre){
      $idTorre=$torre->getIdTorre();

      try {
          $sql= "SELECT `idTorre`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `stiker_activo`, `fecha_compra`"
          ."FROM `torre`"
          ."WHERE `idTorre`='$idTorre'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $torre->setIdTorre($data[$i]['idTorre']);
          $torre->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $torre->setMarca($data[$i]['marca']);
          $torre->setModelo($data[$i]['modelo']);
          $torre->setSerial($data[$i]['serial']);
          $torre->setStiker_activo($data[$i]['stiker_activo']);
          $torre->setFecha_compra($data[$i]['fecha_compra']);

          }
      return $torre;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Torre en la base de datos.
     * @param torre objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($torre){
      $idTorre=$torre->getIdTorre();
$equipo_idEquipo=$torre->getEquipo_idEquipo();
$marca=$torre->getMarca();
$modelo=$torre->getModelo();
$serial=$torre->getSerial();
$stiker_activo=$torre->getStiker_activo();
$fecha_compra=$torre->getFecha_compra();

      try {
          $sql= "UPDATE `torre` SET`idTorre`='$idTorre' ,`Equipo_idEquipo`='$equipo_idEquipo' ,`marca`='$marca' ,`modelo`='$modelo' ,`serial`='$serial' ,`stiker_activo`='$stiker_activo' ,`fecha_compra`='$fecha_compra' WHERE `idTorre`='$idTorre'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Torre en la base de datos.
     * @param torre objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($torre){
      $idTorre=$torre->getIdTorre();

      try {
          $sql ="DELETE FROM `torre` WHERE `idTorre`='$idTorre'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Torre en la base de datos.
     * @return ArrayList<Torre> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idTorre`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `stiker_activo`, `fecha_compra`"
          ."FROM `torre`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $torre= new Torre();
          $torre->setIdTorre($data[$i]['idTorre']);
          $torre->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $torre->setMarca($data[$i]['marca']);
          $torre->setModelo($data[$i]['modelo']);
          $torre->setSerial($data[$i]['serial']);
          $torre->setStiker_activo($data[$i]['stiker_activo']);
          $torre->setFecha_compra($data[$i]['fecha_compra']);

          array_push($lista,$torre);
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