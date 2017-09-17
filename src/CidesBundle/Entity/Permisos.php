<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permisos
 *
 * @ORM\Table(name="permisos", indexes={@ORM\Index(name="FK_Association_14", columns={"id_rol"}), @ORM\Index(name="FK_Association_15", columns={"id_menuItem"})})
 * @ORM\Entity
 */
class Permisos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_permisos", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPermisos;

    /**
     * @var \CidesBundle\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id_rol")
     * })
     */
    private $idRol;

    /**
     * @var \CidesBundle\Entity\Menuitem
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Menuitem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_menuItem", referencedColumnName="id_menuItem")
     * })
     */
    private $idMenuitem;



    /**
     * Get idPermisos
     *
     * @return integer 
     */
    public function getIdPermisos()
    {
        return $this->idPermisos;
    }

    /**
     * Set idRol
     *
     * @param \CidesBundle\Entity\Rol $idRol
     * @return Permisos
     */
    public function setIdRol(\CidesBundle\Entity\Rol $idRol = null)
    {
        $this->idRol = $idRol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \CidesBundle\Entity\Rol 
     */
    public function getIdRol()
    {
        return $this->idRol;
    }

    /**
     * Set idMenuitem
     *
     * @param \CidesBundle\Entity\Menuitem $idMenuitem
     * @return Permisos
     */
    public function setIdMenuitem(\CidesBundle\Entity\Menuitem $idMenuitem = null)
    {
        $this->idMenuitem = $idMenuitem;

        return $this;
    }

    /**
     * Get idMenuitem
     *
     * @return \CidesBundle\Entity\Menuitem 
     */
    public function getIdMenuitem()
    {
        return $this->idMenuitem;
    }
}
