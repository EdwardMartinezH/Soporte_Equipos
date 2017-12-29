<?php

class TipoPantalla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idTipo_Pantalla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoPantalla;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;



    /**
     * Get idtipoPantalla
     *
     * @return integer
     */
    public function getIdtipoPantalla()
    {
        return $this->idtipoPantalla;
    }

    public function setIdtipoPantalla($id)
    {
        $this->idtipoPantalla=$id;
    }
    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return TipoPantalla
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
