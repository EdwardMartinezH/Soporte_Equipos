<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Esta es una frase no referenciada  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_perifericoDao.php';
include_once realpath('..').'\dto\Tipo_periferico.php';

class MySqlTipo_perifericoDao implements Tipo_perifericoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_periferico){
      $id=$tipo_periferico->getId();
$nombre=$tipo_periferico->getNombre();

      try {
          $sql= "INSERT INTO `tipo_periferico`( `id`, `nombre`)"
          ."VALUES ('$id','$nombre')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_periferico){
      $id=$tipo_periferico->getId();

      try {
          $sql= "SELECT `id`, `nombre`"
          ."FROM `tipo_periferico`"
          ."WHERE `id`='$id'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tipo_periferico->setId($data[$i]['id']);
          $tipo_periferico->setNombre($data[$i]['nombre']);

          }
      return $tipo_periferico;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_periferico){
      $id=$tipo_periferico->getId();
$nombre=$tipo_periferico->getNombre();

      try {
          $sql= "UPDATE `tipo_periferico` SET`id`='$id' ,`nombre`='$nombre' WHERE `id`='$id'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tipo_periferico en la base de datos.
     * @param tipo_periferico objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_periferico){
      $id=$tipo_periferico->getId();

      try {
          $sql ="DELETE FROM `tipo_periferico` WHERE `id`='$id'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_periferico en la base de datos.
     * @return ArrayList<Tipo_periferico> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id`, `nombre`"
          ."FROM `tipo_periferico`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tipo_periferico= new Tipo_periferico();
          $tipo_periferico->setId($data[$i]['id']);
          $tipo_periferico->setNombre($data[$i]['nombre']);

          array_push($lista,$tipo_periferico);
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