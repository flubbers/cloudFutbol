<?php

namespace CloudFutbol\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CloudFutbol\JuegoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="liga")
 */
class Liga
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
	protected $Nombre;

	/**
	 * @ORM\Column(type="string",length=10)
	 */
	protected $NombreCorto;

    /**
     * @ORM\Column(type="integer")
     */ 
	protected $NumEquipos;



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
     * Set Nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->Nombre = $nombre;
    }

    /**
     * Get Nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set NombreCorto
     *
     * @param string $nombreCorto
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->NombreCorto = $nombreCorto;
    }

    /**
     * Get NombreCorto
     *
     * @return string 
     */
    public function getNombreCorto()
    {
        return $this->NombreCorto;
    }

    /**
     * Set NumEquipos
     *
     * @param integer $numEquipos
     */
    public function setNumEquipos($numEquipos)
    {
        $this->NumEquipos = $numEquipos;
    }

    /**
     * Get NumEquipos
     *
     * @return integer 
     */
    public function getNumEquipos()
    {
        return $this->NumEquipos;
    }
}