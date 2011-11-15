<?php

namespace CloudFutbol\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * CloudFutbol\JuegoBundle\Entity
 *
 * @ORM\Entity
 * @ORM\Table(name="equipo")
 */
class Equipo
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
	 * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)	 
	 */
	protected $Estadio;

	/**
	 * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MaxLength(255)	 
	 */
	protected $Pais;

	/**
	 * @ORM\Column(type="integer")
	 */	
	protected $Aforo;

	/**
	 * @ORM\Column(type="decimal",scale=3)
	 */	
	protected $DimensionCampo;

	/**
	 * @ORM\Column(type="integer")
	 */		
	protected $Socios;

	/**
	 * @ORM\Column(type="decimal",scale=3)
	 */	
	protected $Presupuesto;

	/**
 	 * @ORM\Column(type="string",length=255)
     * @Assert\NotBlank()
     * @Assert\MaxLength(255) 	 
	 */	
	protected $Entrenador;

	/**
	 * @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\MaxLength(40)     
	 */	
	protected $NumJugadores;

	/**
     * @ORM\ManyToOne(targetEntity="Jugador")
	 * @ORM\JoinColumn(name="jugador_id", referencedColumnName="id")
	 */
	protected $Jugador;

	/**
	* @ORM\Column(type="integer")
     * @Assert\NotBlank()
     * @Assert\MaxLength(10)    
	*/
	protected $NumEquipaciones;

	/**
    * @ORM\OneToMany(targetEntity="Equipacion", mappedBy="equipo")
	* @ORM\JoinColumn(name="equipacion_id", referencedColumnName="id")
	*/
	protected $Equipacion;


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
     * Set Estadio
     *
     * @param string $estadio
     */
    public function setEstadio($estadio)
    {
        $this->Estadio = $estadio;
    }

    /**
     * Get Estadio
     *
     * @return string 
     */
    public function getEstadio()
    {
        return $this->Estadio;
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
     * Set Aforo
     *
     * @param integer $aforo
     */
    public function setAforo($aforo)
    {
        $this->Aforo = $aforo;
    }

    /**
     * Get Aforo
     *
     * @return integer 
     */
    public function getAforo()
    {
        return $this->Aforo;
    }

    /**
     * Set DimensionCampo
     *
     * @param decimal $dimensionCampo
     */
    public function setDimensionCampo($dimensionCampo)
    {
        $this->DimensionCampo = $dimensionCampo;
    }

    /**
     * Get DimensionCampo
     *
     * @return decimal 
     */
    public function getDimensionCampo()
    {
        return $this->DimensionCampo;
    }

    /**
     * Set Socios
     *
     * @param integer $socios
     */
    public function setSocios($socios)
    {
        $this->Socios = $socios;
    }

    /**
     * Get Socios
     *
     * @return integer 
     */
    public function getSocios()
    {
        return $this->Socios;
    }

    /**
     * Set Presupuesto
     *
     * @param decimal $presupuesto
     */
    public function setPresupuesto($presupuesto)
    {
        $this->Presupuesto = $presupuesto;
    }

    /**
     * Get Presupuesto
     *
     * @return decimal 
     */
    public function getPresupuesto()
    {
        return $this->Presupuesto;
    }

    /**
     * Set Entrenador
     *
     * @param string $entrenador
     */
    public function setEntrenador($entrenador)
    {
        $this->Entrenador = $entrenador;
    }

    /**
     * Get Entrenador
     *
     * @return string 
     */
    public function getEntrenador()
    {
        return $this->Entrenador;
    }

    /**
     * Set NumJugadores
     *
     * @param integer $numJugadores
     */
    public function setNumJugadores($numJugadores)
    {
        $this->NumJugadores = $numJugadores;
    }

    /**
     * Get NumJugadores
     *
     * @return integer 
     */
    public function getNumJugadores()
    {
        return $this->NumJugadores;
    }

    /**
     * Set NumEquipaciones
     *
     * @param integer $numEquipaciones
     */
    public function setNumEquipaciones($numEquipaciones)
    {
        $this->NumEquipaciones = $numEquipaciones;
    }

    /**
     * Get NumEquipaciones
     *
     * @return integer 
     */
    public function getNumEquipaciones()
    {
        return $this->NumEquipaciones;
    }
    public function __construct()
    {
        $this->Equipacion = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Set Jugador
     *
     * @param CloudFutbol\JuegoBundle\Entity\Jugador $jugador
     */
    public function setJugador(\CloudFutbol\JuegoBundle\Entity\Jugador $jugador)
    {
        $this->Jugador = $jugador;
    }

    /**
     * Get Jugador
     *
     * @return CloudFutbol\JuegoBundle\Entity\Jugador 
     */
    public function getJugador()
    {
        return $this->Jugador;
    }

    /**
     * Add Equipacion
     *
     * @param CloudFutbol\JuegoBundle\Entity\Equipacion $equipacion
     */
    public function addEquipacion(\CloudFutbol\JuegoBundle\Entity\Equipacion $equipacion)
    {
        $this->Equipacion[] = $equipacion;
    }

    /**
     * Get Equipacion
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getEquipacion()
    {
        return $this->Equipacion;
    }
}