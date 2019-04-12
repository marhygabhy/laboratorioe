<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\clienteRepository")
 * @ORM\Table(name="cliente", indexes={@ORM\Index(name="fk_cliente_pais1_idx", columns={"pais_id"})})
 */
class cliente
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    protected $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    protected $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255, unique=true)
     */
    protected $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255, unique=true)
     */
    protected $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=255, nullable=false)
     */
    protected $clave;

    /**
     * @ORM\OneToMany(targetEntity="solicitud", mappedBy="cliente")
     * @ORM\JoinColumn(name="id", referencedColumnName="cliente_id", nullable=false)
     */
    protected $solicitud;

    /**
     * @ORM\ManyToOne(targetEntity="pais", inversedBy="cliente")
     * @ORM\JoinColumn(name="pais_id", referencedColumnName="id", nullable=false)
     */
    protected $pais;

    public function __construct()
    {
        $this->solicitud = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'nombre', 'apellido', 'correo', 'usuario', 'clave', 'pais_id');
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return cliente
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     *
     * @return cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return cliente
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set usuario
     *
     * @param string $usuario
     *
     * @return cliente
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return cliente
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Add solicitud
     *
     * @param \ELE\EditorialBundle\Entity\solicitud $solicitud
     *
     * @return cliente
     */
    public function addSolicitud(\ELE\EditorialBundle\Entity\solicitud $solicitud)
    {
        $this->solicitud[] = $solicitud;

        return $this;
    }

    /**
     * Remove solicitud
     *
     * @param \ELE\EditorialBundle\Entity\solicitud $solicitud
     */
    public function removeSolicitud(\ELE\EditorialBundle\Entity\solicitud $solicitud)
    {
        $this->solicitud->removeElement($solicitud);
    }

    /**
     * Get solicitud
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }

    /**
     * Set pais
     *
     * @param \ELE\EditorialBundle\Entity\pais $pais
     *
     * @return cliente
     */
    public function setPais(\ELE\EditorialBundle\Entity\pais $pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \ELE\EditorialBundle\Entity\pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}
