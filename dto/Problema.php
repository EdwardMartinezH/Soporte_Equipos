<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Nuestra empresa cuenta con una división sólo para las frases. Disfrútalas  \\


class Problema {

  private $idProblema;
  private $problema;
  private $Equipo_idEquipo;
  private $fecha_registro;

    /**
     * Constructor de Problema
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idProblema
     * @return idProblema
     */
  public function getIdProblema(){
      return $this->idProblema;
  }

    /**
     * Modifica el valor correspondiente a idProblema
     * @param idProblema
     */
  public function setIdProblema($idProblema){
      $this->idProblema = $idProblema;
  }
    /**
     * Devuelve el valor correspondiente a problema
     * @return problema
     */
  public function getProblema(){
      return $this->problema;
  }

    /**
     * Modifica el valor correspondiente a problema
     * @param problema
     */
  public function setProblema($problema){
      $this->problema = $problema;
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
     * Devuelve el valor correspondiente a fecha_registro
     * @return fecha_registro
     */
  public function getFecha_registro(){
      return $this->fecha_registro;
  }

    /**
     * Modifica el valor correspondiente a fecha_registro
     * @param fecha_registro
     */
  public function setFecha_registro($fecha_registro){
      $this->fecha_registro = $fecha_registro;
  }


}
//That´s all folks!