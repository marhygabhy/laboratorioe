<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ELE\EditorialBundle\Entity\Usuario
 *
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\UsuarioRepository")
 * @ORM\Table(name="usuario", uniqueConstraints={@ORM\UniqueConstraint(name="id_UNIQUE", columns={"id"})})
 */
class Usuario
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\SequenceGenerator(sequenceName="usuario_id_seq", allocationSize=1, initialValue=1)
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

    public function __construct()
    {
    }

    public function __sleep()
    {
        return array('id', 'nombre', 'apellido', 'correo', 'usuario', 'clave');
    }
}