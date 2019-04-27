<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * ELE\EditorialBundle\Entity\Cliente
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\ClienteRepository")
 * @ORM\Table(name="cliente", indexes={@ORM\Index(name="fk_cliente_pais1_idx", columns={"pais_id"})}, uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Cliente
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="cliente_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $nombre;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $apellido;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $correo;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $usuario;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $clave;

    /**
     * @ORM\OneToMany(targetEntity="Solicitud", mappedBy="cliente")
     * @ORM\JoinColumn(name="id", referencedColumnName="cliente_id", nullable=false)
     */
    protected $solicituds;

    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="clientes")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id", nullable=false)
     */
    protected $pais;

    public function __construct()
    {
        $this->solicituds = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'nombre', 'apellido', 'correo', 'usuario', 'clave', 'pais_id');
    }
}