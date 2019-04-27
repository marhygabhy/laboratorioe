<?php

namespace ELE\EditorialBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;

use Doctrine\ORM\Mapping as ORM;

/**
 * solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\solicitudRepository")
 */ 
class solicitud
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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="libro", inversedBy="solicitud")
     * @ORM\JoinTable(name="libro_solicitud",
     *   joinColumns={
     *     @ORM\JoinColumn(name="solicitud_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="libro_id", referencedColumnName="id")
     *   }
     * )
     */
    private $libro;

    public function __construct() {
        $this->libro = new \Doctrine\Common\Collections\ArrayCollection();
    }
 
    /**
     * @var string
     *
     * @ORM\Column(name="cliente", type="string", length=255)
     */
    protected $cliente;


    public function __sleep()
    {
        return array('id', 'cliente', 'libro_id');
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
     * Set cliente
     *
     * @param string $cliente
     *
     * @return solicitud
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Add libro
     *
     * @param \ELE\EditorialBundle\Entity\libro $libro
     *
     * @return solicitud
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
}
