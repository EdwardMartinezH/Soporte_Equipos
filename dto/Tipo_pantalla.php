<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Me pagan USD 10,000 por cada frase que invento. 20,000 por las más tontas  \\


class Tipo_pantalla {

  private $idTipo_Pantalla;
  private $nombre;

    /**
     * Constructor de Tipo_pantalla
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a idTipo_Pantalla
     * @return idTipo_Pantalla
     */
  public function getIdTipo_Pantalla(){
      return $this->idTipo_Pantalla;
  }

    /**
     * Modifica el valor correspondiente a idTipo_Pantalla
     * @param idTipo_Pantalla
     */
  public function setIdTipo_Pantalla($idTipo_Pantalla){
      $this->idTipo_Pantalla = $idTipo_Pantalla;
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