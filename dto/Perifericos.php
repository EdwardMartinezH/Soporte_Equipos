<?php

class Perifericos
{

    private $id;

    private $isimpresora;

    private $marca;

    private $modelo;

    private $serial;

    private $pulgadas;

    private $stikerActivo;

    private $fechaCompra;

    private $departamentodepartamento;

    private $equipoequipo;

    private $tipoPantallatipoPantalla;

    private $tipoPeriferico;

    public function getId()
    {
        return $this->id;
    }

    public function setIsimpresora($isimpresora)
    {
        $this->isimpresora = $isimpresora;

        return $this;
    }

 
    public function getIsimpresora()
    {
        return $this->isimpresora;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setSerial($serial)
    {
        $this->serial = $serial;

        return $this;
    }

    public function getSerial()
    {
        return $this->serial;
    }

    public function setPulgadas($pulgadas)
    {
        $this->pulgadas = $pulgadas;

        return $this;
    }

    public function getPulgadas()
    {
        return $this->pulgadas;
    }

    /**
     * Set stikerActivo
     *
     * @param string $stikerActivo
     *
     * @return Perifericos
     */
    public function setStikerActivo($stikerActivo)
    {
        $this->stikerActivo = $stikerActivo;

        return $this;
    }

    /**
     * Get stikerActivo
     *
     * @return string
     */
    public function getStikerActivo()
    {
        return $this->stikerActivo;
    }

    /**
     * Set fechaCompra
     *
     * @param string $fechaCompra
     *
     * @return Perifericos
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;

        return $this;
    }

    /**
     * Get fechaCompra
     *
     * @return string
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * Set departamentodepartamento
     *
     * @param \AppBundle\Entity\Departamento $departamentodepartamento
     *
     * @return Perifericos
     */
    public function setDepartamentodepartamento($departamentodepartamento)
    {
        $this->departamentodepartamento = $departamentodepartamento;

        return $this;
    }

    /**
     * Get departamentodepartamento
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getDepartamentodepartamento()
    {
        return $this->departamentodepartamento;
    }

    /**
     * Set equipoequipo
     *
     * @param \AppBundle\Entity\Equipo $equipoequipo
     *
     * @return Perifericos
     */
    public function setEquipoequipo($equipoequipo)
    {
        $this->equipoequipo = $equipoequipo;

        return $this;
    }

    /**
     * Get equipoequipo
     *
     * @return \AppBundle\Entity\Equipo
     */
    public function getEquipoequipo()
    {
        return $this->equipoequipo;
    }

    /**
     * Set tipoPantallatipoPantalla
     *
     * @param \AppBundle\Entity\TipoPantalla $tipoPantallatipoPantalla
     *
     * @return Perifericos
     */
    public function setTipoPantallatipoPantalla($tipoPantallatipoPantalla)
    {
        $this->tipoPantallatipoPantalla = $tipoPantallatipoPantalla;

        return $this;
    }

    /**
     * Get tipoPantallatipoPantalla
     *
     * @return \AppBundle\Entity\TipoPantalla
     */
    public function getTipoPantallatipoPantalla()
    {
        return $this->tipoPantallatipoPantalla;
    }

    /**
     * Set tipoPeriferico
     *
     * @param \AppBundle\Entity\TipoPeriferico $tipoPeriferico
     *
     * @return Perifericos
     */
    public function setTipoPeriferico($tipoPeriferico)
    {
        $this->tipoPeriferico = $tipoPeriferico;

        return $this;
    }

    /**
     * Get tipoPeriferico
     *
     * @return \AppBundle\Entity\TipoPeriferico
     */
    public function getTipoPeriferico()
    {
        return $this->tipoPeriferico;
    }
}
