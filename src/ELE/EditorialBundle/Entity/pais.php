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
     * @ORM\OneToMany(targetEntity="user", mappedBy="pais")
     * @ORM\JoinColumn(name="id", referencedColumnName="pais_id", nullable=false)
     */
    protected $user;


    public function __construct()
    {
        $this->user = new ArrayCollection();
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
     * Add user
     *
     * @param \ELE\EditorialBundle\Entity\user $user
     *
     * @return pais
     */
    public function addUser(\ELE\EditorialBundle\Entity\user $user)
    {
        $this->user[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \ELE\EditorialBundle\Entity\user $user
     */
    public function removeUser(\ELE\EditorialBundle\Entity\user $user)
    {
        $this->user->removeElement($user);
    }

    /**
     * Get user
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUser()
    {
        return $this->user;
    }

    public function __toString()
    {
        return $this->getDescripcion();
    }

}
