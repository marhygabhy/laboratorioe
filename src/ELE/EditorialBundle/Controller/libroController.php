<?php

namespace ELE\EditorialBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ELE\EditorialBundle\Entity\libro;
use ELE\EditorialBundle\Form\libroType;

/**
 * libro controller.
 *
 * @Route("/libro")
 */
class libroController extends Controller
{
    /**
     * Lists all libro entities.
     *
     * @Route("/", name="libro_index")
     * @Method("GET")
     */
    public function indexAction()
    {   
        $em = $this->getDoctrine()->getManager();

        $libros = $em->getRepository('EditorialBundle:libro')->findAll();

        return $this->render('libro/index.html.twig', array(
            'libros' => $libros,
        ));
    }

    /**
     * Creates a new libro entity.
     *
     * @Route("/new", name="libro_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $libro = new libro();
        $form = $this->createForm('ELE\EditorialBundle\Form\libroType', $libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // La variable $file guardará el PDF subido
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $libro->getRuta();

            // Generar un numbre único para el archivo antes de guardarlo
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Mover el archivo al directorio donde se guardan los curriculums
            $cvDir = $this->container->getparameter('kernel.root_dir').'/../web/uploads/libros/';
            $file->move($cvDir, $fileName);

            // Actualizar la propiedad curriculum para guardar el nombre de archivo PDF
            // en lugar de sus contenidos
            $libro->setRuta($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($libro);
            $em->flush();

            return $this->redirectToRoute('libro_show', array('id' => $libro->getId()));
        }

        return $this->render('libro/new.html.twig', array(
            'libro' => $libro,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a libro entity.
     *
     * @Route("/{id}", name="libro_show")
     * @Method("GET")
     */
    public function showAction(libro $libro)
    {
        $deleteForm = $this->createDeleteForm($libro);

        return $this->render('libro/show.html.twig', array(
            'libro' => $libro,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing libro entity.
     *
     * @Route("/{id}/edit", name="libro_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, libro $libro)
    {
        $deleteForm = $this->createDeleteForm($libro);
        $editForm = $this->createForm('ELE\EditorialBundle\Form\libroType', $libro);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            // La variable $file guardará el PDF subido
            /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            $file = $libro->getRuta();

            // Generar un numbre único para el archivo antes de guardarlo
            $fileName = md5(uniqid()).'.'.$file->guessExtension();

            // Mover el archivo al directorio donde se guardan los curriculums
            $cvDir = $this->container->getparameter('kernel.root_dir').'/../web/uploads/libros/';
            $file->move($cvDir, $fileName);

            // Actualizar la propiedad curriculum para guardar el nombre de archivo PDF
            // en lugar de sus contenidos
            $libro->setRuta($fileName);
            $em = $this->getDoctrine()->getManager();
            $em->persist($libro);
            $em->flush();

            return $this->redirectToRoute('libro_edit', array('id' => $libro->getId()));
        }

        return $this->render('libro/edit.html.twig', array(
            'libro' => $libro,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a libro entity.
     *
     * @Route("/{id}", name="libro_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, libro $libro)
    {
        $form = $this->createDeleteForm($libro);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($libro);
            $em->flush();
        }

        return $this->redirectToRoute('libro_index');
    }

    /**
     * Creates a form to delete a libro entity.
     *
     * @param libro $libro The libro entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(libro $libro)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('libro_delete', array('id' => $libro->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
