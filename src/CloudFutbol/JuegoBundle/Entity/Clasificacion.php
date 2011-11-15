<?php

namespace CloudFutbol\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * CloudFutbol\JuegoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="clasificacion")
 */
class Clasificacion
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
     * @ORM\OneToOne(targetEntity="Equipo")
	 * @ORM\JoinColumn(name="equipo_id", referencedColumnName="id")	
	*/
	protected $Equipo;

	/**
     * @ORM\OneToOne(targetEntity="Liga")
	 * @ORM\JoinColumn(name="liga_id", referencedColumnName="id")	
	 */
	protected $Liga;

	/**
	 * @ORM\Column(type="integer",length=255)
	*/
	protected $Puntuacion;


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
     * Set Puntuacion
     *
     * @param integer $puntuacion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->Puntuacion = $puntuacion;
    }

    /**
     * Get Puntuacion
     *
     * @return integer 
     */
    public function getPuntuacion()
    {
        return $this->Puntuacion;
    }

    /**
     * Set Equipo
     *
     * @param CloudFutbol\JuegoBundle\Entity\Equipo $equipo
     */
    public function setEquipo(\CloudFutbol\JuegoBundle\Entity\Equipo $equipo)
    {
        $this->Equipo = $equipo;
    }

    /**
     * Get Equipo
     *
     * @return CloudFutbol\JuegoBundle\Entity\Equipo 
     */
    public function getEquipo()
    {
        return $this->Equipo;
    }

    /**
     * Set Liga
     *
     * @param CloudFutbol\JuegoBundle\Entity\Liga $liga
     */
    public function setLiga(\CloudFutbol\JuegoBundle\Entity\Liga $liga)
    {
        $this->Liga = $liga;
    }

    /**
     * Get Liga
     *
     * @return CloudFutbol\JuegoBundle\Entity\Liga 
     */
    public function getLiga()
    {
        return $this->Liga;
    }
}