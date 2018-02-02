<?php

namespace TurismoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Turismo
 *
 * @ORM\Table(name="turismo")
 * @ORM\Entity(repositoryClass="TurismoBundle\Repository\TurismoRepository")
 */
class Turismo
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=255)
     */
    private $ciudad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEntrada", type="date")
     */
    private $fechaEntrada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaSalida", type="date")
     */
    private $fechaSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="localizacion", type="string", length=255)
     */
    private $localizacion;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     *
     * @return Turismo
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set fechaEntrada
     *
     * @param \DateTime $fechaEntrada
     *
     * @return Turismo
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fechaEntrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fechaEntrada
     *
     * @return \DateTime
     */
    public function getFechaEntrada()
    {
        return $this->fechaEntrada;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return Turismo
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set localizacion
     *
     * @param string $localizacion
     *
     * @return Turismo
     */
    public function setLocalizacion($localizacion)
    {
        $this->localizacion = $localizacion;

        return $this;
    }

    /**
     * Get localizacion
     *
     * @return string
     */
    public function getLocalizacion()
    {
        return $this->localizacion;
    }
}

