<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Libro
 *
 * @ORM\Table(name="libro", uniqueConstraints={@ORM\UniqueConstraint(name="uniq_5799ad2b20332d99", columns={"codigo"})}, indexes={@ORM\Index(name="fk_libro_coleccion1_idx", columns={"coleccion_id"})})
 * @ORM\Entity
 */
class Libro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="libro_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitulo", type="string", length=255, nullable=true)
     */
    private $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255, nullable=false)
     */
    private $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina", type="string", length=255, nullable=true)
     */
    private $pagina;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255, nullable=true)
     */
    private $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=true)
     */
    private $formato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="text", nullable=true)
     */
    private $ruta;

    /**
     * @var \Coleccion
     *
     * @ORM\ManyToOne(targetEntity="Coleccion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coleccion_id", referencedColumnName="id")
     * })
     */
    private $coleccion;


}

