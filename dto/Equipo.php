<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Recuerda, cuando enciendas la molotov, debes arrojarla  \\


class Equipo {

  private $idEquipo;
  private $usuario_Id;
  private $tipo_equipo_id;

    /**
     * Constructor de Equipo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idEquipo
     * @return idEquipo
     */
  public function getIdEquipo(){
      return $this->idEquipo;
  }

    /**
     * Modifica el valor correspondiente a idEquipo
     * @param idEquipo
     */
  public function setIdEquipo($idEquipo){
      $this->idEquipo = $idEquipo;
  }
    /**
     * Devuelve el valor correspondiente a usuario_Id
     * @return usuario_Id
     */
  public function getUsuario_Id(){
      return $this->usuario_Id;
  }

    /**
     * Modifica el valor correspondiente a usuario_Id
     * @param usuario_Id
     */
  public function setUsuario_Id($usuario_Id){
      $this->usuario_Id = $usuario_Id;
  }
    /**
     * Devuelve el valor correspondiente a tipo_equipo_id
     * @return tipo_equipo_id
     */
  public function getTipo_equipo_id(){
      return $this->tipo_equipo_id;
  }

    /**
     * Modifica el valor correspondiente a tipo_equipo_id
     * @param tipo_equipo_id
     */
  public function setTipo_equipo_id($tipo_equipo_id){
      $this->tipo_equipo_id = $tipo_equipo_id;
  }


}
//That´s all folks!