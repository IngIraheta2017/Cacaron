<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol", indexes={@ORM\Index(name="FK_Association_13", columns={"id_asignacion"})})
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_rol", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRol;

    /**
     * @var \CidesBundle\Entity\Asignacion
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Asignacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_asignacion", referencedColumnName="id_asignacion")
     * })
     */
    private $idAsignacion;



    /**
     * Get idRol
     *
     * @return integer 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set idAsignacion
     *
     * @param \CidesBundle\Entity\Asignacion $idAsignacion
     * @return Rol
     */
    public function setIdAsignacion(\CidesBundle\Entity\Asignacion $idAsignacion = null)
    {
        $this->idAsignacion = $idAsignacion;

        return $this;
    }

    /**
     * Get idAsignacion
     *
     * @return \CidesBundle\Entity\Asignacion 
     */
    public function getIdAsignacion()
    {
        return $this->idAsignacion;
    }
}
