<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ELE\EditorialBundle\Entity\Pais
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\PaisRepository")
 * @ORM\Table(name="pais", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Pais
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="pais_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $descripcion;

    /**
     * @ORM\OneToMany(targetEntity="Cliente", mappedBy="pais")
     * @ORM\JoinColumn(name="id", referencedColumnName="pais_id", nullable=false)
     */
    protected $clientes;

    public function __construct()
    {
        $this->clientes = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'descripcion');
    }
}