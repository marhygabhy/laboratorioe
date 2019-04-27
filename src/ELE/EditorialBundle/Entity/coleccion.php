<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * coleccion
 *
 * @ORM\Table(name="coleccion")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\coleccionRepository")
 * @ORM\Table(name="coleccion", indexes={@ORM\Index(name="fk_coleccion_categoria1_idx", columns={"categoria_id"})})
 */
class coleccion
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
     * @ORM\OneToMany(targetEntity="libro", mappedBy="coleccion")
     * @ORM\JoinColumn(name="id", referencedColumnName="coleccion_id", nullable=false)
     */
    protected $libro;

    /**
     * @ORM\ManyToOne(targetEntity="categoria", inversedBy="coleccion")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=false)
     */
    protected $categoria;


    public function __construct()
    {
        $this->libro = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'descripcion', 'categoria_id');
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
     * @return coleccion
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
     * Add libro
     *
     * @param \ELE\EditorialBundle\Entity\libro $libro
     *
     * @return coleccion
     */
    public function addLibro(\ELE\EditorialBundle\Entity\libro $libro)
    {
        $this->libro[] = $libro;

        return $this;
    }

    /**
     * Remove libro
     *
     * @param \ELE\EditorialBundle\Entity\libro $libro
     */
    public function removeLibro(\ELE\EditorialBundle\Entity\libro $libro)
    {
        $this->libro->removeElement($libro);
    }

    /**
     * Get libro
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLibro()
    {
        return $this->libro;
    }

    /**
     * Set categoria
     *
     * @param \ELE\EditorialBundle\Entity\categoria $categoria
     *
     * @return coleccion
     */
    public function setCategoria(\ELE\EditorialBundle\Entity\categoria $categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \ELE\EditorialBundle\Entity\categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }

}
