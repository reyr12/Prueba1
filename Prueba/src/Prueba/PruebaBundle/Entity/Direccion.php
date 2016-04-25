<?php

namespace Prueba\PruebaBundle\Entity;

/**
 * Direccion
 */
class Direccion
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var int
     */
    private $numInt;

    /**
     * @var string
     */
    private $numExt;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $municipio;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var int
     */
    private $codPost;

    /**
     * @var string
     */
    private $pais;


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
     * Set calle
     *
     * @param string $calle
     *
     * @return Direccion
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numInt
     *
     * @param integer $numInt
     *
     * @return Direccion
     */
    public function setNumInt($numInt)
    {
        $this->numInt = $numInt;

        return $this;
    }

    /**
     * Get numInt
     *
     * @return int
     */
    public function getNumInt()
    {
        return $this->numInt;
    }

    /**
     * Set numExt
     *
     * @param string $numExt
     *
     * @return Direccion
     */
    public function setNumExt($numExt)
    {
        $this->numExt = $numExt;

        return $this;
    }

    /**
     * Get numExt
     *
     * @return string
     */
    public function getNumExt()
    {
        return $this->numExt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return Direccion
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set municipio
     *
     * @param string $municipio
     *
     * @return Direccion
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

        return $this;
    }

    /**
     * Get municipio
     *
     * @return string
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Direccion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set codPost
     *
     * @param integer $codPost
     *
     * @return Direccion
     */
    public function setCodPost($codPost)
    {
        $this->codPost = $codPost;

        return $this;
    }

    /**
     * Get codPost
     *
     * @return int
     */
    public function getCodPost()
    {
        return $this->codPost;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Direccion
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }


    
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personal
     *
     * @param \Prueba\PruebaBundle\Entity\Personal $personal
     *
     * @return Direccion
     */
    public function addPersonal(\Prueba\PruebaBundle\Entity\Personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \Prueba\PruebaBundle\Entity\Personal $personal
     */
    public function removePersonal(\Prueba\PruebaBundle\Entity\Personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set personal
     *
     * @param \Prueba\PruebaBundle\Entity\Personal $personal
     *
     * @return Direccion
     */
    public function setPersonal(\Prueba\PruebaBundle\Entity\Personal $personal = null)
    {
        $this->personal = $personal;

        return $this;
    }
    public function __toString()
    {
        return $this->nombre;
    }
}
