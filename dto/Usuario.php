<?php
/*
              -------Creado por-------
             \(�u� )/ Anarchy \( �u�)/
              ------------------------
 */

//    �Sabias que Anarchy se gener� a s� mismo?  \\


class Usuario {

  private $Id;
  private $Nombre;
  private $Contraseña;
  private $Estado;
  private $correo;
  private $Cargo_id;

    /**
     * Constructor de Usuario
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
    /**
     * Devuelve el valor correspondiente a Contraseña
     * @return Contraseña
     */
  public function getContraseña(){
      return $this->Contraseña;
  }

    /**
     * Modifica el valor correspondiente a Contraseña
     * @param Contraseña
     */
  public function setContraseña($contraseña){
      $this->Contraseña = $contraseña;
  }
    /**
     * Devuelve el valor correspondiente a Estado
     * @return Estado
     */
  public function getEstado(){
      return $this->Estado;
  }

    /**
     * Modifica el valor correspondiente a Estado
     * @param Estado
     */
  public function setEstado($estado){
      $this->Estado = $estado;
  }
    /**
     * Devuelve el valor correspondiente a correo
     * @return correo
     */
  public function getCorreo(){
      return $this->correo;
  }

    /**
     * Modifica el valor correspondiente a correo
     * @param correo
     */
  public function setCorreo($correo){
      $this->correo = $correo;
  }
    /**
     * Devuelve el valor correspondiente a Cargo_id
     * @return Cargo_id
     */
  public function getCargo_id(){
      return $this->Cargo_id;
  }

    /**
     * Modifica el valor correspondiente a Cargo_id
     * @param Cargo_id
     */
  public function setCargo_id($cargo_id){
      $this->Cargo_id = $cargo_id;
  }


}
//That�s all folks!