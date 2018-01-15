<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¿Has escuchado hablar del grandioso señor Arciniegas?  \\


class Software {

  private $idSoftware;
  private $Equipo_idEquipo;
  private $Tipo_Software_idTipo_Software;
  private $fecha_vencimiento;
  private $version;
  private $nombre;

    /**
     * Constructor de Software
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idSoftware
     * @return idSoftware
     */
  public function getIdSoftware(){
      return $this->idSoftware;
  }

    /**
     * Modifica el valor correspondiente a idSoftware
     * @param idSoftware
     */
  public function setIdSoftware($idSoftware){
      $this->idSoftware = $idSoftware;
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
     * Devuelve el valor correspondiente a Tipo_Software_idTipo_Software
     * @return Tipo_Software_idTipo_Software
     */
  public function getTipo_Software_idTipo_Software(){
      return $this->Tipo_Software_idTipo_Software;
  }

    /**
     * Modifica el valor correspondiente a Tipo_Software_idTipo_Software
     * @param Tipo_Software_idTipo_Software
     */
  public function setTipo_Software_idTipo_Software($tipo_Software_idTipo_Software){
      $this->Tipo_Software_idTipo_Software = $tipo_Software_idTipo_Software;
  }
    /**
     * Devuelve el valor correspondiente a fecha_vencimiento
     * @return fecha_vencimiento
     */
  public function getFecha_vencimiento(){
      return $this->fecha_vencimiento;
  }

    /**
     * Modifica el valor correspondiente a fecha_vencimiento
     * @param fecha_vencimiento
     */
  public function setFecha_vencimiento($fecha_vencimiento){
      $this->fecha_vencimiento = $fecha_vencimiento;
  }
    /**
     * Devuelve el valor correspondiente a version
     * @return version
     */
  public function getVersion(){
      return $this->version;
  }

    /**
     * Modifica el valor correspondiente a version
     * @param version
     */
  public function setVersion($version){
      $this->version = $version;
  }
    /**
     * Devuelve el valor correspondiente a nombre
     * @return nombre
     */
  public function getNombre(){
      return $this->nombre;
  }

    /**
     * Modifica el valor correspondiente a nombre
     * @param nombre
     */
  public function setNombre($nombre){
      $this->nombre = $nombre;
  }


}
//That´s all folks!