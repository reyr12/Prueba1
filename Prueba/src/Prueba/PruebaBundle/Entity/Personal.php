<?php

namespace Prueba\PruebaBundle\Entity;

/**
 * Personal
 */
class Personal
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $apePat;

    /**
     * @var string
     */
    private $apeMat;

    /**
     * @var int
     */
    private $edad;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Personal
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apePat
     *
     * @param string $apePat
     *
     * @return Personal
     */
    public function setApePat($apePat)
    {
        $this->apePat = $apePat;

        return $this;
    }

    /**
     * Get apePat
     *
     * @return string
     */
    public function getApePat()
    {
        return $this->apePat;
    }

    /**
     * Set apeMat
     *
     * @param string $apeMat
     *
     * @return Personal
     */
    public function setApeMat($apeMat)
    {
        $this->apeMat = $apeMat;

        return $this;
    }

    /**
     * Get apeMat
     *
     * @return string
     */
    public function getApeMat()
    {
        return $this->apeMat;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Personal
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return int
     */
    public function getEdad()
    {
        return $this->edad;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
