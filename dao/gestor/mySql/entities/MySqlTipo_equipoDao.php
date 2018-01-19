<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Si crees que las mujeres son difíciles, no conoces Anarchy  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\Tipo_equipoDao.php';
include_once realpath('..').'\dto\Tipo_equipo.php';

class MySqlTipo_equipoDao implements Tipo_equipoDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $cn =$conexion;
    }

    /**
     * Guarda un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($tipo_equipo){
      try {
          $sql= "INSERT INTO `tipo_equipo`( `id_tipo_equipo`, `nombre`)"
          ."VALUES ('$tipo_equipo->getId_tipo_equipo()','$tipo_equipo->getNombre()')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($tipo_equipo){
      try {
          $sql= "SELECT `id_tipo_equipo`, `nombre`"
          ."FROM `tipo_equipo`"
          ."WHERE `id_tipo_equipo`='$tipo_equipo->getId_tipo_equipo()'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $tipo_equipo->setId_tipo_equipo($data[$i]['id_tipo_equipo']);
          $tipo_equipo->setNombre($data[$i]['nombre']);

          }
      return $tipo_equipo;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($tipo_equipo){
      try {
          $sql= "UPDATE `tipo_equipo` SET`id_tipo_equipo`='$tipo_equipo->getId_tipo_equipo()',`nombre`='$tipo_equipo->getNombre() WHERE `id_tipo_equipo`='$tipo_equipo->getId_tipo_equipo()";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Tipo_equipo en la base de datos.
     * @param tipo_equipo objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($tipo_equipo){
      try {
          $sql ="DELETE FROM `tipo_equipo` WHERE `id_tipo_equipo`='$tipo_equipo->getId_tipo_equipo()'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Tipo_equipo en la base de datos.
     * @return ArrayList<Tipo_equipo> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `id_tipo_equipo`, `nombre`"
          ."FROM `tipo_equipo`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $tipo_equipo= new Tipo_equipo();
          $tipo_equipo->setId_tipo_equipo($data[$i]['id_tipo_equipo']);
          $tipo_equipo->setNombre($data[$i]['nombre']);

          array_push($lista,$tipo_equipo);
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
