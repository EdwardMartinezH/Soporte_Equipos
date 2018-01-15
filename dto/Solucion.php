<?php
/*
              -------Creado por-------
             \(�u� )/ Anarchy \( �u�)/
              ------------------------
 */

//    �Sabias que Anarchy se gener� a s� mismo?  \\


class Solucion {

  private $idSolucion;
  private $Problema_idProblema;
  private $Periféricos_idPeriféricos;
  private $Software_idSoftware;
  private $fecha_Solucion;
  private $Solucion;

    /**
     * Constructor de Solucion
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idSolucion
     * @return idSolucion
     */
  public function getIdSolucion(){
      return $this->idSolucion;
  }

    /**
     * Modifica el valor correspondiente a idSolucion
     * @param idSolucion
     */
  public function setIdSolucion($idSolucion){
      $this->idSolucion = $idSolucion;
  }
    /**
     * Devuelve el valor correspondiente a Problema_idProblema
     * @return Problema_idProblema
     */
  public function getProblema_idProblema(){
      return $this->Problema_idProblema;
  }

    /**
     * Modifica el valor correspondiente a Problema_idProblema
     * @param Problema_idProblema
     */
  public function setProblema_idProblema($problema_idProblema){
      $this->Problema_idProblema = $problema_idProblema;
  }
    /**
     * Devuelve el valor correspondiente a Periféricos_idPeriféricos
     * @return Periféricos_idPeriféricos
     */
  public function getPeriféricos_idPeriféricos(){
      return $this->Periféricos_idPeriféricos;
  }

    /**
     * Modifica el valor correspondiente a Periféricos_idPeriféricos
     * @param Periféricos_idPeriféricos
     */
  public function setPeriféricos_idPeriféricos($periféricos_idPeriféricos){
      $this->Periféricos_idPeriféricos = $periféricos_idPeriféricos;
  }
    /**
     * Devuelve el valor correspondiente a Software_idSoftware
     * @return Software_idSoftware
     */
  public function getSoftware_idSoftware(){
      return $this->Software_idSoftware;
  }

    /**
     * Modifica el valor correspondiente a Software_idSoftware
     * @param Software_idSoftware
     */
  public function setSoftware_idSoftware($software_idSoftware){
      $this->Software_idSoftware = $software_idSoftware;
  }
    /**
     * Devuelve el valor correspondiente a fecha_Solucion
     * @return fecha_Solucion
     */
  public function getFecha_Solucion(){
      return $this->fecha_Solucion;
  }

    /**
     * Modifica el valor correspondiente a fecha_Solucion
     * @param fecha_Solucion
     */
  public function setFecha_Solucion($fecha_Solucion){
      $this->fecha_Solucion = $fecha_Solucion;
  }
    /**
     * Devuelve el valor correspondiente a Solucion
     * @return Solucion
     */
  public function getSolucion(){
      return $this->Solucion;
  }

    /**
     * Modifica el valor correspondiente a Solucion
     * @param Solucion
     */
  public function setSolucion($solucion){
      $this->Solucion = $solucion;
  }


}
//That�s all folks!