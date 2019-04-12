<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ELE\EditorialBundle\Entity\Libro
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\LibroRepository")
 * @ORM\Table(name="libro", indexes={@ORM\Index(name="fk_libro_coleccion1_idx", columns={"coleccion_id"})}, uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"}), @ORM\UniqueConstraint(name="codigo_UNIQUE", columns={"codigo"})})
 */
class Libro
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="libro_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $codigo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $titulo;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $subtitulo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $autor;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $pagina;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $isbn;

    /**
     * @ORM\Column(type="string", length=45, nullable=true)
     */
    protected $formato;

    /**
     * @ORM\OneToMany(targetEntity="Solicitud", mappedBy="libro")
     * @ORM\JoinColumn(name="id", referencedColumnName="libro_id", nullable=false)
     */
    protected $solicituds;

    /**
     * @ORM\ManyToOne(targetEntity="Coleccion", inversedBy="libros")
     * @ORM\JoinColumn(name="coleccion_id", referencedColumnName="id", nullable=false)
     */
    protected $coleccion;

    public function __construct()
    {
        $this->solicituds = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'codigo', 'titulo', 'subtitulo', 'autor', 'pagina', 'isbn', 'formato', 'coleccion_id');
    }
}