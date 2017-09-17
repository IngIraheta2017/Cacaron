<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", indexes={@ORM\Index(name="FK_Association_21", columns={"id_equipo"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var \CidesBundle\Entity\Equipo
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Equipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo", referencedColumnName="id_equipo")
     * })
     */
    private $idEquipo;



    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idEquipo
     *
     * @param \CidesBundle\Entity\Equipo $idEquipo
     * @return User
     */
    public function setIdEquipo(\CidesBundle\Entity\Equipo $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return \CidesBundle\Entity\Equipo 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
