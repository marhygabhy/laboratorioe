<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coleccion
 *
 * @ORM\Table(name="coleccion", indexes={@ORM\Index(name="fk_coleccion_categoria1_idx", columns={"categoria_id"})})
 * @ORM\Entity
 */
class Coleccion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="coleccion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=false)
     */
    private $descripcion;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;


}

