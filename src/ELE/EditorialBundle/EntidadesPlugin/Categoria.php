<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ELE\EditorialBundle\Entity\Categoria
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\CategoriaRepository")
 * @ORM\Table(name="categoria", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Categoria
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="categoria_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Coleccion", mappedBy="categoria")
     * @ORM\JoinColumn(name="id", referencedColumnName="categoria_id", nullable=false)
     */
    protected $coleccions;

    public function __construct()
    {
        $this->coleccions = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'descripcion');
    }
}