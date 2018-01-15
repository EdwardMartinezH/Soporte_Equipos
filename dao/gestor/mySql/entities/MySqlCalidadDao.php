<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...y esta no es la única frase que encontrarás...  \\

include_once realpath('..').'\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..').'\dao\interfaz\CalidadDao.php';
include_once realpath('..').'\dto\Calidad.php';

class MySqlCalidadDao implements CalidadDao{

private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
            $this->cn =$conexion;
    }

    /**
     * Guarda un objeto Calidad en la base de datos.
     * @param calidad objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function insert($calidad){
      $idcalidad=$calidad->getIdcalidad();
$clave=$calidad->getClave();
$bloquea=$calidad->getBloquea();
$bloqueu_automatico=$calidad->getBloqueu_automatico();
$copia_seguridad=$calidad->getCopia_seguridad();
$antivirus=$calidad->getAntivirus();
$progra_no_autorizado=$calidad->getProgra_no_autorizado();
$comparte_archivos=$calidad->getComparte_archivos();
$cuenta_adm=$calidad->getCuenta_adm();
$observaciones=$calidad->getObservaciones();
$equipo_idEquipo=$calidad->getEquipo_idEquipo();

      try {
          $sql= "INSERT INTO `calidad`( `idcalidad`, `clave`, `bloquea`, `bloqueu_automatico`, `copia_seguridad`, `antivirus`, `progra_no_autorizado`, `comparte_archivos`, `cuenta_adm`, `observaciones`, `equipo_idEquipo`)"
          ."VALUES ('$idcalidad','$clave','$bloquea','$bloqueu_automatico','$copia_seguridad','$antivirus','$progra_no_autorizado','$comparte_archivos','$cuenta_adm','$observaciones','$equipo_idEquipo')";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function select($calidad){
      $idcalidad=$calidad->getIdcalidad();

      try {
          $sql= "SELECT `idcalidad`, `clave`, `bloquea`, `bloqueu_automatico`, `copia_seguridad`, `antivirus`, `progra_no_autorizado`, `comparte_archivos`, `cuenta_adm`, `observaciones`, `equipo_idEquipo`"
          ."FROM `calidad`"
          ."WHERE `idcalidad`='$idcalidad'";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
          $calidad->setIdcalidad($data[$i]['idcalidad']);
          $calidad->setClave($data[$i]['clave']);
          $calidad->setBloquea($data[$i]['bloquea']);
          $calidad->setBloqueu_automatico($data[$i]['bloqueu_automatico']);
          $calidad->setCopia_seguridad($data[$i]['copia_seguridad']);
          $calidad->setAntivirus($data[$i]['antivirus']);
          $calidad->setProgra_no_autorizado($data[$i]['progra_no_autorizado']);
          $calidad->setComparte_archivos($data[$i]['comparte_archivos']);
          $calidad->setCuenta_adm($data[$i]['cuenta_adm']);
          $calidad->setObservaciones($data[$i]['observaciones']);
          $calidad->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);

          }
      return $calidad;      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      return null;
      }
  }

    /**
     * Modifica un objeto Calidad en la base de datos.
     * @param calidad objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function update($calidad){
      $idcalidad=$calidad->getIdcalidad();
$clave=$calidad->getClave();
$bloquea=$calidad->getBloquea();
$bloqueu_automatico=$calidad->getBloqueu_automatico();
$copia_seguridad=$calidad->getCopia_seguridad();
$antivirus=$calidad->getAntivirus();
$progra_no_autorizado=$calidad->getProgra_no_autorizado();
$comparte_archivos=$calidad->getComparte_archivos();
$cuenta_adm=$calidad->getCuenta_adm();
$observaciones=$calidad->getObservaciones();
$equipo_idEquipo=$calidad->getEquipo_idEquipo();

      try {
          $sql= "UPDATE `calidad` SET`idcalidad`='$idcalidad' ,`clave`='$clave' ,`bloquea`='$bloquea' ,`bloqueu_automatico`='$bloqueu_automatico' ,`copia_seguridad`='$copia_seguridad' ,`antivirus`='$antivirus' ,`progra_no_autorizado`='$progra_no_autorizado' ,`comparte_archivos`='$comparte_archivos' ,`cuenta_adm`='$cuenta_adm' ,`observaciones`='$observaciones' ,`equipo_idEquipo`='$equipo_idEquipo' WHERE `idcalidad`='$idcalidad'";
         return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Elimina un objeto Calidad en la base de datos.
     * @param calidad objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function delete($calidad){
      $idcalidad=$calidad->getIdcalidad();

      try {
          $sql ="DELETE FROM `calidad` WHERE `idcalidad`='$idcalidad'";
          return $this->insertarConsulta($sql);
      } catch (SQLException $e) {
          throw new Exception('Primary key is null');
      }
  }

    /**
     * Busca un objeto Calidad en la base de datos.
     * @return ArrayList<Calidad> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
  public function listAll(){
      $lista = array();
      try {
          $sql ="SELECT `idcalidad`, `clave`, `bloquea`, `bloqueu_automatico`, `copia_seguridad`, `antivirus`, `progra_no_autorizado`, `comparte_archivos`, `cuenta_adm`, `observaciones`, `equipo_idEquipo`"
          ."FROM `calidad`"
          ."WHERE 1";
          $data = $this->ejecutarConsulta($sql);
          for ($i=0; $i < count($data) ; $i++) {
              $calidad= new Calidad();
          $calidad->setIdcalidad($data[$i]['idcalidad']);
          $calidad->setClave($data[$i]['clave']);
          $calidad->setBloquea($data[$i]['bloquea']);
          $calidad->setBloqueu_automatico($data[$i]['bloqueu_automatico']);
          $calidad->setCopia_seguridad($data[$i]['copia_seguridad']);
          $calidad->setAntivirus($data[$i]['antivirus']);
          $calidad->setProgra_no_autorizado($data[$i]['progra_no_autorizado']);
          $calidad->setComparte_archivos($data[$i]['comparte_archivos']);
          $calidad->setCuenta_adm($data[$i]['cuenta_adm']);
          $calidad->setObservaciones($data[$i]['observaciones']);
          $calidad->setEquipo_idEquipo($data[$i]['equipo_idEquipo']);

          array_push($lista,$calidad);
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