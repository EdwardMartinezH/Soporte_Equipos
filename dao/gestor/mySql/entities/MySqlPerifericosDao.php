<?php

/*
  -------Creado por-------
  \(°u° )/ Anarchy \( °u°)/
  ------------------------
 */

//    Hecho en sólo 6 días  \\

include_once realpath('..') . '\dao\gestor\mySql\factory\MySqlFactoryDao.php';
include_once realpath('..') . '\dao\interfaz\PerifericosDao.php';
include_once realpath('..') . '\dto\Perifericos.php';

class MySqlPerifericosDao implements PerifericosDao {

    private $cn;

    /**
     * Inicializa una única conexión a la base de datos, que se usará para cada consulta.
     */
    function __construct($conexion) {
        $this->cn = $conexion;
    }

    /**
     * Guarda un objeto Perifericos en la base de datos.
     * @param perifericos objeto a guardar
     * @return  Valor asignado a la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function insert($perifericos) {
//$equipo_idEquipo=null;
        $marca = $perifericos->getMarca();
        $modelo = $perifericos->getModelo();
        $serial = $perifericos->getSerial();
        $pulgadas = $perifericos->getPulgadas();
        $stiker_activo = $perifericos->getStiker_activo();
        $fecha_compra = $perifericos->getFecha_compra();
        $tipo_Periferico_id = $perifericos->getTipo_Periferico_id();
        $tipo_Pantalla_idTipo_Pantalla = $perifericos->getTipo_Pantalla_idTipo_Pantalla();

        try {
            if ($tipo_Periferico_id != 1) {
                $sql = "INSERT INTO `perifericos`( `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`)"
                        . "VALUES (null,'$marca','$modelo','$serial','$pulgadas','$stiker_activo','$fecha_compra','$tipo_Periferico_id',null)";
            } else {
                $sql = "INSERT INTO `perifericos`( `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`)"
                        . "VALUES (null,'$marca','$modelo','$serial','$pulgadas','$stiker_activo','$fecha_compra','$tipo_Periferico_id','$tipo_Pantalla_idTipo_Pantalla')";
            }
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Busca un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la(s) llave(s) primaria(s) para consultar
     * @return El objeto consultado o null
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function select($perifericos) {
        $id = $perifericos->getId();

        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `id`='$id'";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);
            }
            return $perifericos;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    /**
     * Modifica un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la información a modificar
     * @return  Valor de la llave primaria 
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function update($perifericos) {
        $id = $perifericos->getId();
        $equipo_idEquipo = $perifericos->getEquipo_idEquipo();
        $marca = $perifericos->getMarca();
        $modelo = $perifericos->getModelo();
        $serial = $perifericos->getSerial();
        $pulgadas = $perifericos->getPulgadas();
        $stiker_activo = $perifericos->getStiker_activo();
        $fecha_compra = $perifericos->getFecha_compra();
        $tipo_Periferico_id = $perifericos->getTipo_Periferico_id();
        $tipo_Pantalla_idTipo_Pantalla = $perifericos->getTipo_Pantalla_idTipo_Pantalla();

        try {
            $sql = "UPDATE `perifericos` SET`id`='$id' ,`Equipo_idEquipo`='$equipo_idEquipo' ,`marca`='$marca' ,`modelo`='$modelo' ,`serial`='$serial' ,`pulgadas`='$pulgadas' ,`stiker_activo`='$stiker_activo' ,`fecha_compra`='$fecha_compra' ,`Tipo_Periferico_id`='$tipo_Periferico_id' ,`Tipo_Pantalla_idTipo_Pantalla`='$tipo_Pantalla_idTipo_Pantalla' WHERE `id`='$id'";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    public function updateEquipoId($perifericos) {
        $id = $perifericos->getId();
        $equipo_idEquipo = $perifericos->getEquipo_idEquipo();
        try {
            $sql = "UPDATE `perifericos` SET `Equipo_idEquipo`='$equipo_idEquipo' WHERE `id`='$id'";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Elimina un objeto Perifericos en la base de datos.
     * @param perifericos objeto con la(s) llave(s) primaria(s) para consultar
     * @return  Valor de la llave primaria eliminada
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function delete($perifericos) {
        $id = $perifericos->getId();

        try {
            $sql = "DELETE FROM `perifericos` WHERE `id`='$id'";
            return $this->insertarConsulta($sql);
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
        }
    }

    /**
     * Busca un objeto Perifericos en la base de datos.
     * @return ArrayList<Perifericos> Puede contener los objetos consultados o estar vacío
     * @throws NullPointerException Si los objetos correspondientes a las llaves foraneas son null
     */
    public function listAll() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE 1";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listByTipoPeriferico($periferico) {
        $lista = array();
        $tipo = $periferico->getTipo_Periferico_id();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Tipo_Periferico_id`=$tipo AND `Equipo_idEquipo` IS NULL";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listByTipoPantalla($periferico) {
        $lista = array();
        $tipo = $periferico->getTipo_Pantalla_idTipo_Pantalla();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Tipo_Pantalla_idTipo_Pantalla`=$tipo AND `Equipo_idEquipo` IS NULL";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listPantallasFree() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Equipo_idEquipo` is null and `Tipo_Periferico_id` = 1";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listTecladosFree() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Equipo_idEquipo` is null and `Tipo_Periferico_id` = 2";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listmousesFree() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Equipo_idEquipo` is null and `Tipo_Periferico_id` = 3";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listImpresorasFree() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Equipo_idEquipo` is null and `Tipo_Periferico_id` = 4";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function listCamarasFree() {
        $lista = array();
        try {
            $sql = "SELECT `id`, `Equipo_idEquipo`, `marca`, `modelo`, `serial`, `pulgadas`, `stiker_activo`, `fecha_compra`, `Tipo_Periferico_id`, `Tipo_Pantalla_idTipo_Pantalla`"
                    . "FROM `perifericos`"
                    . "WHERE `Equipo_idEquipo` is null and `Tipo_Periferico_id` = 5";
            $data = $this->ejecutarConsulta($sql);
            for ($i = 0; $i < count($data); $i++) {
                $perifericos = new Perifericos();
                $perifericos->setId($data[$i]['id']);
                $perifericos->setEquipo_idEquipo($data[$i]['Equipo_idEquipo']);
                $perifericos->setMarca($data[$i]['marca']);
                $perifericos->setModelo($data[$i]['modelo']);
                $perifericos->setSerial($data[$i]['serial']);
                $perifericos->setPulgadas($data[$i]['pulgadas']);
                $perifericos->setStiker_activo($data[$i]['stiker_activo']);
                $perifericos->setFecha_compra($data[$i]['fecha_compra']);
                $perifericos->setTipo_Periferico_id($data[$i]['Tipo_Periferico_id']);
                $perifericos->setTipo_Pantalla_idTipo_Pantalla($data[$i]['Tipo_Pantalla_idTipo_Pantalla']);

                array_push($lista, $perifericos);
            }
            return $lista;
        } catch (SQLException $e) {
            throw new Exception('Primary key is null');
            return null;
        }
    }

    public function insertarConsulta($sql) {
        $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sentencia = $this->cn->prepare($sql);
        $sentencia->execute();
        $sentencia = null;
        return $this->cn->lastInsertId();
    }

    public function ejecutarConsulta($sql) {
        $this->cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sentencia = $this->cn->prepare($sql);
        $sentencia->execute();
        $data = $sentencia->fetchAll();
        $sentencia = null;
        return $data;
    }

    /**
     * Cierra la conexión actual a la base de datos
     */
    public function close() {
        $cn = null;
    }

}

//That´s all folks!
