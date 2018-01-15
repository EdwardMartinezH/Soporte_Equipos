<?php
/*
              -------Creado por-------
             \(°u° )/ Anarchy \( °u°)/
              ------------------------
 */

//    Y pensar que Anarchy está hecho en código espagueti...  \\


class Cargo {

  private $Id;
  private $Nombre;

    /**
     * Constructor de Cargo
    */
     public function __construct(){}

    /**
     * Devuelve el valor correspondiente a Id
     * @return Id
     */
  public function getId(){
      return $this->Id;
  }

    /**
     * Modifica el valor correspondiente a Id
     * @param Id
     */
  public function setId($id){
      $this->Id = $id;
  }
    /**
     * Devuelve el valor correspondiente a Nombre
     * @return Nombre
     */
  public function getNombre(){
      return $this->Nombre;
  }

    /**
     * Modifica el valor correspondiente a Nombre
     * @param Nombre
     */
  public function setNombre($nombre){
      $this->Nombre = $nombre;
  }


}
//That´s all folks!