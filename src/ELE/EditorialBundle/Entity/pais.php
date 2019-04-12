<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\paisRepository")
 */
class pais
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
     * @ORM\OneToMany(targetEntity="cliente", mappedBy="pais")
     * @ORM\JoinColumn(name="id", referencedColumnName="pais_id", nullable=false)
     */
    protected $cliente;

    public function __construct()
    {
        $this->cliente = new ArrayCollection();
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
     * @return pais
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
     * Add cliente
     *
     * @param \ELE\EditorialBundle\Entity\cliente $cliente
     *
     * @return pais
     */
    public function addCliente(\ELE\EditorialBundle\Entity\cliente $cliente)
    {
        $this->cliente[] = $cliente;

        return $this;
    }

    /**
     * Remove cliente
     *
     * @param \ELE\EditorialBundle\Entity\cliente $cliente
     */
    public function removeCliente(\ELE\EditorialBundle\Entity\cliente $cliente)
    {
        $this->cliente->removeElement($cliente);
    }

    /**
     * Get cliente
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }
}
