<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ELE\EditorialBundle\Entity\Coleccion
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\ColeccionRepository")
 * @ORM\Table(name="coleccion", indexes={@ORM\Index(name="fk_coleccion_categoria1_idx", columns={"categoria_id"})}, uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Coleccion
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="coleccion_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $descrpcion;

    /**
     * @ORM\OneToMany(targetEntity="Libro", mappedBy="coleccion")
     * @ORM\JoinColumn(name="id", referencedColumnName="coleccion_id", nullable=false)
     */
    protected $libros;

    /**
     * @ORM\ManyToOne(targetEntity="Categoria", inversedBy="coleccions")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id", nullable=false)
     */
    protected $categoria;

    public function __construct()
    {
        $this->libros = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'descrpcion', 'categoria_id');
    }
}