<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ...Y como plato principal: ¡Código espagueti!  \\


class Perifericos {

  private $id;
  private $Equipo_idEquipo;
  private $marca;
  private $modelo;
  private $serial;
  private $pulgadas;
  private $stiker_activo;
  private $fecha_compra;
  private $Tipo_Periferico_id;
  private $Tipo_Pantalla_idTipo_Pantalla;

    /**
     * Constructor de Perifericos
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id
     * @return id
     */
  public function getId(){
      return $this->id;
  }

    /**
     * Modifica el valor correspondiente a id
     * @param id
     */
  public function setId($id){
      $this->id = $id;
  }
    /**
     * Devuelve el valor correspondiente a Equipo_idEquipo
     * @return Equipo_idEquipo
     */
  public function getEquipo_idEquipo(){
      return $this->Equipo_idEquipo;
  }

    /**
     * Modifica el valor correspondiente a Equipo_idEquipo
     * @param Equipo_idEquipo
     */
  public function setEquipo_idEquipo($equipo_idEquipo){
      $this->Equipo_idEquipo = $equipo_idEquipo;
  }
    /**
     * Devuelve el valor correspondiente a marca
     * @return marca
     */
  public function getMarca(){
      return $this->marca;
  }

    /**
     * Modifica el valor correspondiente a marca
     * @param marca
     */
  public function setMarca($marca){
      $this->marca = $marca;
  }
    /**
     * Devuelve el valor correspondiente a modelo
     * @return modelo
     */
  public function getModelo(){
      return $this->modelo;
  }

    /**
     * Modifica el valor correspondiente a modelo
     * @param modelo
     */
  public function setModelo($modelo){
      $this->modelo = $modelo;
  }
    /**
     * Devuelve el valor correspondiente a serial
     * @return serial
     */
  public function getSerial(){
      return $this->serial;
  }

    /**
     * Modifica el valor correspondiente a serial
     * @param serial
     */
  public function setSerial($serial){
      $this->serial = $serial;
  }
    /**
     * Devuelve el valor correspondiente a pulgadas
     * @return pulgadas
     */
  public function getPulgadas(){
      return $this->pulgadas;
  }

    /**
     * Modifica el valor correspondiente a pulgadas
     * @param pulgadas
     */
  public function setPulgadas($pulgadas){
      $this->pulgadas = $pulgadas;
  }
    /**
     * Devuelve el valor correspondiente a stiker_activo
     * @return stiker_activo
     */
  public function getStiker_activo(){
      return $this->stiker_activo;
  }

    /**
     * Modifica el valor correspondiente a stiker_activo
     * @param stiker_activo
     */
  public function setStiker_activo($stiker_activo){
      $this->stiker_activo = $stiker_activo;
  }
    /**
     * Devuelve el valor correspondiente a fecha_compra
     * @return fecha_compra
     */
  public function getFecha_compra(){
      return $this->fecha_compra;
  }

    /**
     * Modifica el valor correspondiente a fecha_compra
     * @param fecha_compra
     */
  public function setFecha_compra($fecha_compra){
      $this->fecha_compra = $fecha_compra;
  }
    /**
     * Devuelve el valor correspondiente a Tipo_Periferico_id
     * @return Tipo_Periferico_id
     */
  public function getTipo_Periferico_id(){
      return $this->Tipo_Periferico_id;
  }

    /**
     * Modifica el valor correspondiente a Tipo_Periferico_id
     * @param Tipo_Periferico_id
     */
  public function setTipo_Periferico_id($tipo_Periferico_id){
      $this->Tipo_Periferico_id = $tipo_Periferico_id;
  }
    /**
     * Devuelve el valor correspondiente a Tipo_Pantalla_idTipo_Pantalla
     * @return Tipo_Pantalla_idTipo_Pantalla
     */
  public function getTipo_Pantalla_idTipo_Pantalla(){
      return $this->Tipo_Pantalla_idTipo_Pantalla;
  }

    /**
     * Modifica el valor correspondiente a Tipo_Pantalla_idTipo_Pantalla
     * @param Tipo_Pantalla_idTipo_Pantalla
     */
  public function setTipo_Pantalla_idTipo_Pantalla($tipo_Pantalla_idTipo_Pantalla){
      $this->Tipo_Pantalla_idTipo_Pantalla = $tipo_Pantalla_idTipo_Pantalla;
  }


}
//That´s all folks!