<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿No es más sencillo hacer todo en el Main?  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\SoftwareDao.php';
include_once realpath('..').'\dto\Software.php';

class MySqlSoftwareDao implements SoftwareDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Software en la base de datos.
     * @param software objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($software){
      $idSoftware=$software->getIdSoftware();
$equipo_idEquipo=$software->getEquipo_idEquipo();
$tipo_Software_idTipo_Software=$software->getTipo_Software_idTipo_Software();
$fecha_vencimiento=$software->getFecha_vencimiento();
$version=$software->getVersion();
$nombre=$software->getNombre();

      try {
          $sql= "INSERT INTO `software`( `idSoftware`, `Equipo_idEquipo`, `Tipo_Software_idTipo_Software`, `fecha_vencimiento`, `version`, `nombre`)"
          ."VALUES ('$idSoftware','$equipo_idEquipo','$tipo_Software_idTipo_Software','$fecha_vencimiento','$version','$nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($software){
      $idSoftware=$software->getIdSoftware();

      try {
          $sql= "SELECT `idSoftware`, `Equipo_idEquipo`, `Tipo_Software_idTipo_Software`, `fecha_vencimiento`, `version`, `nombre`"
          ."FROM `software`"
          ."WHERE `idSoftware`='$idSoftware'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $software->setIdSoftware($data[$i]['idSoftware']);
          $software->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $software->setTipo_Software_idTipo_Software($data[$i]['Tipo_Software_idTipo_Software']);
          $software->setFecha_vencimiento($data[$i]['fecha_vencimiento']);
          $software->setVersion($data[$i]['version']);
          $software->setNombre($data[$i]['nombre']);

          }
      return $software;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Software en la base de datos.
     * @param software objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($software){
      $idSoftware=$software->getIdSoftware();
$equipo_idEquipo=$software->getEquipo_idEquipo();
$tipo_Software_idTipo_Software=$software->getTipo_Software_idTipo_Software();
$fecha_vencimiento=$software->getFecha_vencimiento();
$version=$software->getVersion();
$nombre=$software->getNombre();

      try {
          $sql= "UPDATE `software` SET`idSoftware`='$idSoftware' ,`Equipo_idEquipo`='$equipo_idEquipo' ,`Tipo_Software_idTipo_Software`='$tipo_Software_idTipo_Software' ,`fecha_vencimiento`='$fecha_vencimiento' ,`version`='$version' ,`nombre`='$nombre' WHERE `idSoftware`='$idSoftware'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Software en la base de datos.
     * @param software objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($software){
      $idSoftware=$software->getIdSoftware();

      try {
          $sql ="DELETE FROM `software` WHERE `idSoftware`='$idSoftware'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Software en la base de datos.
     * @return ArrayList<Software> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idSoftware`, `Equipo_idEquipo`, `Tipo_Software_idTipo_Software`, `fecha_vencimiento`, `version`, `nombre`"
          ."FROM `software`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $software= new Software();
          $software->setIdSoftware($data[$i]['idSoftware']);
          $software->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
          $software->setTipo_Software_idTipo_Software($data[$i]['Tipo_Software_idTipo_Software']);
          $software->setFecha_vencimiento($data[$i]['fecha_vencimiento']);
          $software->setVersion($data[$i]['version']);
          $software->setNombre($data[$i]['nombre']);

          array_push($lista,$software);
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