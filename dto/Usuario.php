<?php


class Usuario
{
   
    private $Id;

    private $Nombre;

    private $Contrasena;

    private $Estado;

    private $Cargo_id;
    
    private $Correo;

     public function setId($Id)
    {
        $this->Id = $Id;

        return $this;
    }

    public function getId()
    {
        return $this->Id;
    }

    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;

        return $this;
    }

    public function getNombre()
    {
        return $this->Nombre;
    }

    public function setContrasena($contrasena)
    {
        $this->Contrasena = $contrasena;

        return $this;
    }

    public function getContrasena()
    {
        return $this->Contrasena;
    }

    
    public function setEstado($estado)
    {
        $this->Estado = $estado;

        return $this;
    }

    public function getEstado()
    {
        return $this->Estado;
    }

    public function setCargo_id($clave)
    {
        $this->Cargo_id = $clave;

        return $this;
    }

    public function getCargo_id()
    {
        return $this->Cargo_id;
    }
    
    function getCorreo() {
        return $this->Correo;
    }

    function setCorreo($Correo) {
        $this->Correo = $Correo;
    }


}
