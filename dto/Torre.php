<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Para entender la recursividad, primero debes entender la recursividad  \\


class Torre {

  private $idTorre;
  private $Equipo_idEquipo;
  private $marca;
  private $modelo;
  private $serial;
  private $stiker_activo;
  private $fecha_compra;

    /**
     * Constructor de Torre
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTorre
     * @return idTorre
     */
  public function getIdTorre(){
      return $this->idTorre;
  }

    /**
     * Modifica el valor correspondiente a idTorre
     * @param idTorre
     */
  public function setIdTorre($idTorre){
      $this->idTorre = $idTorre;
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


}
//That´s all folks!