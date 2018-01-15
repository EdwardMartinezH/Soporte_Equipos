<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Mi satisfacción es hacerte un poco más vago  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_pantallaDao.php';
include_once realpath('..').'\dto\Tipo_pantalla.php';

class MySqlTipo_pantallaDao implements Tipo_pantallaDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_pantalla){
      $idTipo_Pantalla=$tipo_pantalla->getIdTipo_Pantalla();
$nombre=$tipo_pantalla->getNombre();

      try {
          $sql= "INSERT INTO `tipo_pantalla`( `idTipo_Pantalla`, `nombre`)"
          ."VALUES ('$idTipo_Pantalla','$nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_pantalla){
      $idTipo_Pantalla=$tipo_pantalla->getIdTipo_Pantalla();

      try {
          $sql= "SELECT `idTipo_Pantalla`, `nombre`"
          ."FROM `tipo_pantalla`"
          ."WHERE `idTipo_Pantalla`='$idTipo_Pantalla'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tipo_pantalla->setIdTipo_Pantalla($data[$i]['idTipo_Pantalla']);
          $tipo_pantalla->setNombre($data[$i]['nombre']);

          }
      return $tipo_pantalla;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_pantalla){
      $idTipo_Pantalla=$tipo_pantalla->getIdTipo_Pantalla();
$nombre=$tipo_pantalla->getNombre();

      try {
          $sql= "UPDATE `tipo_pantalla` SET`idTipo_Pantalla`='$idTipo_Pantalla' ,`nombre`='$nombre' WHERE `idTipo_Pantalla`='$idTipo_Pantalla'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tipo_pantalla en la base de datos.
     * @param tipo_pantalla objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_pantalla){
      $idTipo_Pantalla=$tipo_pantalla->getIdTipo_Pantalla();

      try {
          $sql ="DELETE FROM `tipo_pantalla` WHERE `idTipo_Pantalla`='$idTipo_Pantalla'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_pantalla en la base de datos.
     * @return ArrayList<Tipo_pantalla> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idTipo_Pantalla`, `nombre`"
          ."FROM `tipo_pantalla`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tipo_pantalla= new Tipo_pantalla();
          $tipo_pantalla->setIdTipo_Pantalla($data[$i]['idTipo_Pantalla']);
          $tipo_pantalla->setNombre($data[$i]['nombre']);

          array_push($lista,$tipo_pantalla);
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