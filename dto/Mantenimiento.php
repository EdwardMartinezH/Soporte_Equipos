<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    El código es tuyo, modifícalo como quieras  \\


class Mantenimiento {

  private $idMantenimiento;
  private $feha_mantenimiento;
  private $observaciones;

    /**
     * Constructor de Mantenimiento
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idMantenimiento
     * @return idMantenimiento
     */
  public function getIdMantenimiento(){
      return $this->idMantenimiento;
  }

    /**
     * Modifica el valor correspondiente a idMantenimiento
     * @param idMantenimiento
     */
  public function setIdMantenimiento($idMantenimiento){
      $this->idMantenimiento = $idMantenimiento;
  }
    /**
     * Devuelve el valor correspondiente a feha_mantenimiento
     * @return feha_mantenimiento
     */
  public function getFeha_mantenimiento(){
      return $this->feha_mantenimiento;
  }

    /**
     * Modifica el valor correspondiente a feha_mantenimiento
     * @param feha_mantenimiento
     */
  public function setFeha_mantenimiento($feha_mantenimiento){
      $this->feha_mantenimiento = $feha_mantenimiento;
  }
    /**
     * Devuelve el valor correspondiente a observaciones
     * @return observaciones
     */
  public function getObservaciones(){
      return $this->observaciones;
  }

    /**
     * Modifica el valor correspondiente a observaciones
     * @param observaciones
     */
  public function setObservaciones($observaciones){
      $this->observaciones = $observaciones;
  }


}
//That´s all folks!