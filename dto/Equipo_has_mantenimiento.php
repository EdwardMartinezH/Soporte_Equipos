<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    404 Frase no encontrada  \\


class Equipo_has_mantenimiento {

  private $equipo_idEquipo;
  private $mantenimiento_idMantenimiento;

    /**
     * Constructor de Equipo_has_mantenimiento
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a equipo_idEquipo
     * @return equipo_idEquipo
     */
  public function getEquipo_idEquipo(){
      return $this->equipo_idEquipo;
  }

    /**
     * Modifica el valor correspondiente a equipo_idEquipo
     * @param equipo_idEquipo
     */
  public function setEquipo_idEquipo($equipo_idEquipo){
      $this->equipo_idEquipo = $equipo_idEquipo;
  }
    /**
     * Devuelve el valor correspondiente a mantenimiento_idMantenimiento
     * @return mantenimiento_idMantenimiento
     */
  public function getMantenimiento_idMantenimiento(){
      return $this->mantenimiento_idMantenimiento;
  }

    /**
     * Modifica el valor correspondiente a mantenimiento_idMantenimiento
     * @param mantenimiento_idMantenimiento
     */
  public function setMantenimiento_idMantenimiento($mantenimiento_idMantenimiento){
      $this->mantenimiento_idMantenimiento = $mantenimiento_idMantenimiento;
  }


}
//That´s all folks!