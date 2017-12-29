<?php

class Problema
{

    private $idproblema;

    private $problema;

    private $fechaRegistro;

    private $equipoequipo;


    public function getIdproblema()
    {
        return $this->idproblema;
    }

    public function setProblema($problema)
    {
        $this->problema = $problema;

        return $this;
    }

    public function getProblema()
    {
        return $this->problema;
    }

    public function setIdproblema($idproblema)
    {
        $this->idproblema = $idproblema;

        return $this;
    }
    
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;

        return $this;
    }

  
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    public function setEquipoequipo($equipoequipo)
    {
        $this->equipoequipo = $equipoequipo;

        return $this;
    }

    
    public function getEquipoequipo()
    {
        return $this->equipoequipo;
    }
}
