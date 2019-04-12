<?php

namespace ELE\EditorialBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * libro
 *
 * @ORM\Table(name="libro")
 * @ORM\Entity(repositoryClass="ELE\EditorialBundle\Repository\libroRepository")
 * @ORM\Table(name="libro", indexes={@ORM\Index(name="fk_libro_coleccion1_idx", columns={"coleccion_id"})})
 */
class libro
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
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    protected $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    protected $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitulo", type="string", length=255, nullable=true)
     */
    protected $subtitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     */
    protected $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="pagina", type="string", length=255, nullable=true)
     */
    protected $pagina;

    /**
     * @var string
     *
     * @ORM\Column(name="isbn", type="string", length=255, nullable=true)
     */
    protected $isbn;

    /**
     * @var string
     *
     * @ORM\Column(name="formato", type="string", length=255, nullable=true)
     */
    protected $formato;

    /**
     * @var string
     *
     * @ORM\Column(name="descripción", type="string", length=255, nullable=true)
     */
    protected $descripcion;

    /**
     * @var string
     * @Assert\NotBlank(message="Por favor insertar la imagen")
     * @Assert\File(mimeTypes={"image/png"})     
     * @ORM\Column(name="ruta", type="text", nullable=true)
     */
    protected $ruta;

    /**
     * @ORM\OneToMany(targetEntity="solicitud", mappedBy="libro")
     * @ORM\JoinColumn(name="id", referencedColumnName="libro_id", nullable=false)
     */
    protected $solicitud;

    /**
     * @ORM\ManyToOne(targetEntity="coleccion", inversedBy="libro")
     * @ORM\JoinColumn(name="coleccion_id", referencedColumnName="id", nullable=false)
     */
    protected $coleccion;

    public function __construct()
    {
        $this->solicitud = new ArrayCollection();
    }

    public function __sleep()
    {
        return array('id', 'codigo', 'titulo', 'subtitulo', 'autor', 'pagina', 'isbn', 'formato', 'descripcion', 'coleccion_id');
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return libro
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return libro
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    public function __toString()
    {
        return $this->getTitulo();
    }

    /**
     * Set subtitulo
     *
     * @param string $subtitulo
     *
     * @return libro
     */
    public function setSubtitulo($subtitulo)
    {
        $this->subtitulo = $subtitulo;

        return $this;
    }

    /**
     * Get subtitulo
     *
     * @return string
     */
    public function getSubtitulo()
    {
        return $this->subtitulo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     *
     * @return libro
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set pagina
     *
     * @param string $pagina
     *
     * @return libro
     */
    public function setPagina($pagina)
    {
        $this->pagina = $pagina;

        return $this;
    }

    /**
     * Get pagina
     *
     * @return string
     */
    public function getPagina()
    {
        return $this->pagina;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     *
     * @return libro
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }

    /**
     * Get isbn
     *
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set formato
     *
     * @param string $formato
     *
     * @return libro
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return libro
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
     * Set ruta
     *
     * @param string $ruta
     *
     * @return libro
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Add solicitud
     *
     * @param \ELE\EditorialBundle\Entity\solicitud $solicitud
     *
     * @return libro
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
     * Set coleccion
     *
     * @param \ELE\EditorialBundle\Entity\coleccion $coleccion
     *
     * @return libro
     */
    public function setColeccion(\ELE\EditorialBundle\Entity\coleccion $coleccion)
    {
        $this->coleccion = $coleccion;

        return $this;
    }

    /**
     * Get coleccion
     *
     * @return \ELE\EditorialBundle\Entity\coleccion
     */
    public function getColeccion()
    {
        return $this->coleccion;
    }

}
