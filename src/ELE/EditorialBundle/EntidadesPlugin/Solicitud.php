<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ELE\EditorialBundle\Entity\Solicitud
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\SolicitudRepository")
 * @ORM\Table(name="solicitud", indexes={@ORM\Index(name="fk_solicitud_cliente1_idx", columns={"cliente_id"}), @ORM\Index(name="fk_solicitud_libro1_idx", columns={"libro_id"})}, uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Solicitud
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="solicitud_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="solicituds")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id", nullable=false)
     */
    protected $cliente;

    /**
     * @ORM\ManyToOne(targetEntity="Libro", inversedBy="solicituds")
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
}