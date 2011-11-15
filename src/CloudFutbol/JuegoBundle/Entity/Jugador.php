<?php

namespace CloudFutbol\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CloudFutbol\JuegoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="jugador")
 */
class Jugador
{

	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)     
	 */
	protected $Nombre;

	/**
	 * @ORM\Column(type="string",length=10)
     * @Assert\MaxLength(10)   
	 */
	protected $NombreCorto;
		
	/**
	 * @ORM\Column(type="string",length=255)
     * @Assert\MaxLength(255)     
	 */
	protected $Pais;

	/**
	 * @ORM\Column(type="string",length=255)
     * @Assert\MaxLength(255)     
	 */
	protected $Nacionalidad;

	/**
	 * @ORM\Column(type="integer")
	 */	
	protected $Edad;

	/**
	 * @ORM\Column(type="decimal",scale=2)
	 */	
	protected $Peso;

	/**
	 * @ORM\Column(type="decimal",scale=2)
	 */	
	protected $Altura;

	/**
 	 * @ORM\Column(type="integer")
	 */	
	protected $Posicion;

	/**
     * @ORM\OneToOne(targetEntity="Equipo")
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
     * Set Pais
     *
     * @param string $pais
     */
    public function setPais($pais)
    {
        $this->Pais = $pais;
    }

    /**
     * Get Pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->Pais;
    }

    /**
     * Set Nacionalidad
     *
     * @param string $nacionalidad
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->Nacionalidad = $nacionalidad;
    }

    /**
     * Get Nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->Nacionalidad;
    }

    /**
     * Set Edad
     *
     * @param integer $edad
     */
    public function setEdad($edad)
    {
        $this->Edad = $edad;
    }

    /**
     * Get Edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->Edad;
    }

    /**
     * Set Peso
     *
     * @param decimal $peso
     */
    public function setPeso($peso)
    {
        $this->Peso = $peso;
    }

    /**
     * Get Peso
     *
     * @return decimal 
     */
    public function getPeso()
    {
        return $this->Peso;
    }

    /**
     * Set Altura
     *
     * @param decimal $altura
     */
    public function setAltura($altura)
    {
        $this->Altura = $altura;
    }

    /**
     * Get Altura
     *
     * @return decimal 
     */
    public function getAltura()
    {
        return $this->Altura;
    }

    /**
     * Set Posicion
     *
     * @param integer $posicion
     */
    public function setPosicion($posicion)
    {
        $this->Posicion = $posicion;
    }

    /**
     * Get Posicion
     *
     * @return integer 
     */
    public function getPosicion()
    {
        return $this->Posicion;
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
}