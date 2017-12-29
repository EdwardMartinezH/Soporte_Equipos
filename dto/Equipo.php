<?php

class Equipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idEquipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idequipo;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Usuario_idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $usuariousuario;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Mantenimiento", mappedBy="equipoequipo")
     */
    private $mantenimientomantenimiento;

    /**
     * Constructor
     */
    public function __construct()
    {        
    }


    /**
     * Get idequipo
     *
     * @return integer
     */
    public function getIdequipo()
    {
        return $this->idequipo;
    }

    public function setIdequipo($idEquipo)
    {
        $this->idequipo=$idEquipo;
    }
    /**
     * Set usuariousuario
     *
     * @param \AppBundle\Entity\Usuario $usuariousuario
     *
     * @return Equipo
     */
    public function setUsuariousuario( $usuariousuario)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }

    /**
     * Add mantenimientomantenimiento
     *
     * @param \AppBundle\Entity\Mantenimiento $mantenimientomantenimiento
     *
     * @return Equipo
     */
    public function addMantenimientomantenimiento( $mantenimientomantenimiento)
    {
        $this->mantenimientomantenimiento[] = $mantenimientomantenimiento;

        return $this;
    }

    /**
     * Remove mantenimientomantenimiento
     *
     * @param \AppBundle\Entity\Mantenimiento $mantenimientomantenimiento
     */
    public function removeMantenimientomantenimiento( $mantenimientomantenimiento)
    {
        $this->mantenimientomantenimiento->removeElement($mantenimientomantenimiento);
    }

    /**
     * Get mantenimientomantenimiento
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMantenimientomantenimiento()
    {
        return $this->mantenimientomantenimiento;
    }

    public function getAlias(){
        return "Equipo ".$this->idequipo;
    }
    
}
