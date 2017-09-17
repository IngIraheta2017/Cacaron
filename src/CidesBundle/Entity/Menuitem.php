<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menuitem
 *
 * @ORM\Table(name="menuItem", indexes={@ORM\Index(name="FK_Association_16", columns={"men_id_menuItem"})})
 * @ORM\Entity
 */
class Menuitem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_menuItem", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMenuitem;

    /**
     * @var \CidesBundle\Entity\Menuitem
     *
     * @ORM\ManyToOne(targetEntity="CidesBundle\Entity\Menuitem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="men_id_menuItem", referencedColumnName="id_menuItem")
     * })
     */
    private $menMenuitem;



    /**
     * Get idMenuitem
     *
     * @return integer 
     */
    public function getIdMenuitem()
    {
        return $this->idMenuitem;
    }

    /**
     * Set menMenuitem
     *
     * @param \CidesBundle\Entity\Menuitem $menMenuitem
     * @return Menuitem
     */
    public function setMenMenuitem(\CidesBundle\Entity\Menuitem $menMenuitem = null)
    {
        $this->menMenuitem = $menMenuitem;

        return $this;
    }

    /**
     * Get menMenuitem
     *
     * @return \CidesBundle\Entity\Menuitem 
     */
    public function getMenMenuitem()
    {
        return $this->menMenuitem;
    }
}
