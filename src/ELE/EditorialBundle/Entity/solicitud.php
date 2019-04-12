<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * solicitud
 *
 * @ORM\Table(name="solicitud")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\solicitudRepository")
 * @ORM\Table(name="solicitud", indexes={@ORM\Index(name="fk_solicitud_cliente1_idx", columns={"cliente_id"}), @ORM\Index(name="fk_solicitud_libro1_idx", columns={"libro_id"})})
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
     * @ORM\ManyToOne(targetEntity="cliente", inversedBy="solicitud")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=false)
     */
    protected $cliente;

    /**
     * @ORM\ManyToOne(targetEntity="libro", inversedBy="solicitud")
     * @ORM\JoinColumn(name="libro_id", referencedColumnName="id", nullable=false)
     */
    protected $libro;

    public function __construct()
    {
    }

    public function __sleep()
    {
        return array('id', 'cliente_id', 'libro_id');
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
     * @param \ELE\EditorialBundle\Entity\cliente $cliente
     *
     * @return solicitud
     */
    public function setCliente(\ELE\EditorialBundle\Entity\cliente $cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \ELE\EditorialBundle\Entity\cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * Set libro
     *
     * @param \ELE\EditorialBundle\Entity\libro $libro
     *
     * @return solicitud
     */
    public function setLibro(\ELE\EditorialBundle\Entity\libro $libro)
    {
        $this->libro = $libro;

        return $this;
    }

    /**
     * Get libro
     *
     * @return \ELE\EditorialBundle\Entity\libro
     */
    public function getLibro()
    {
        return $this->libro;
    }
}
