<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\categoriaRepository")
 */
class categoria
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    protected $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="coleccion", mappedBy="categoria")
     * @ORM\JoinColumn(name="id", referencedColumnName="categoria_id", nullable=false)
     */
    protected $coleccion;

    public function __construct()
    {
        $this->libro = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'descripcion');
    }


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return categoria
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Add coleccion
     *
     * @param \ELE\EditorialBundle\Entity\coleccion $coleccion
     *
     * @return categoria
     */
    public function addColeccion(\ELE\EditorialBundle\Entity\coleccion $coleccion)
    {
        $this->coleccion[] = $coleccion;

        return $this;
    }

    /**
     * Remove coleccion
     *
     * @param \ELE\EditorialBundle\Entity\coleccion $coleccion
     */
    public function removeColeccion(\ELE\EditorialBundle\Entity\coleccion $coleccion) 
    {
        $this->coleccion->removeElement($coleccion);
    }

    /**
     * Get coleccion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getColeccion()
    {
        return $this->coleccion;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }
}
