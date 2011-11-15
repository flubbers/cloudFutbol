<?php

namespace CloudFutbol\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * CloudFutbol\JuegoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="equipacion")
 */
class Equipacion
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string",length=255)
	 */
	protected $ColorCamiseta;

	/**
	 * @ORM\Column(type="string",length=255)
	 */
	protected $ColorPantalon;

	/**
     * @ORM\OneToMany(targetEntity="Equipo", mappedBy="Equipacion")
     * @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")     
	 */
	protected $Equipo;
		

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ColorCamiseta
     *
     * @param string $colorCamiseta
     */
    public function setColorCamiseta($colorCamiseta)
    {
        $this->ColorCamiseta = $colorCamiseta;
    }

    /**
     * Get ColorCamiseta
     *
     * @return string 
     */
    public function getColorCamiseta()
    {
        return $this->ColorCamiseta;
    }

    /**
     * Set ColorPantalon
     *
     * @param string $colorPantalon
     */
    public function setColorPantalon($colorPantalon)
    {
        $this->ColorPantalon = $colorPantalon;
    }

    /**
     * Get ColorPantalon
     *
     * @return string 
     */
    public function getColorPantalon()
    {
        return $this->ColorPantalon;
    }
    public function __construct()
    {
        $this->Equipo = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add Equipo
     *
     * @param CloudFutbol\JuegoBundle\Entity\Equipo $equipo
     */
    public function addEquipo(\CloudFutbol\JuegoBundle\Entity\Equipo $equipo)
    {
        $this->Equipo[] = $equipo;
    }

    /**
     * Get Equipo
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEquipo()
    {
        return $this->Equipo;
    }
}