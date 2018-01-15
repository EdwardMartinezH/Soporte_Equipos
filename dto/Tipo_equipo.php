<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    ¡Alza el puño y ven! ¡En la hoguera hay de beber!  \\


class Tipo_equipo {

  private $id_tipo_equipo;
  private $nombre;

    /**
     * Constructor de Tipo_equipo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a id_tipo_equipo
     * @return id_tipo_equipo
     */
  public function getId_tipo_equipo(){
      return $this->id_tipo_equipo;
  }

    /**
     * Modifica el valor correspondiente a id_tipo_equipo
     * @param id_tipo_equipo
     */
  public function setId_tipo_equipo($id_tipo_equipo){
      $this->id_tipo_equipo = $id_tipo_equipo;
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