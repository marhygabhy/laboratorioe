<?php

namespace ELE\EditorialBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ELE\EditorialBundle\Entity\coleccion;
use ELE\EditorialBundle\Form\coleccionType;

/**
 * coleccion controller.
 *
 * @Route("/coleccion")
 */
class coleccionController extends Controller
{
    /**
     * Lists all coleccion entities.
     *
     * @Route("/", name="coleccion_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $colecciones = $em->getRepository('EditorialBundle:coleccion')->findAll();

        return $this->render('coleccion/index.html.twig', array(
            'colecciones' => $colecciones,
        ));
    }

    /**
     * Creates a new coleccion entity.
     *
     * @Route("/new", name="coleccion_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $coleccion = new coleccion();
        $form = $this->createForm('ELE\EditorialBundle\Form\coleccionType', $coleccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coleccion);
            $em->flush();

            return $this->redirectToRoute('coleccion_show', array('id' => $coleccion->getId()));
        }

        return $this->render('coleccion/new.html.twig', array(
            'coleccion' => $coleccion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a coleccion entity.
     *
     * @Route("/{id}", name="coleccion_show")
     * @Method("GET")
     */
    public function showAction(coleccion $coleccion)
    {
        $deleteForm = $this->createDeleteForm($coleccion);

        return $this->render('coleccion/show.html.twig', array(
            'coleccion' => $coleccion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing coleccion entity.
     *
     * @Route("/{id}/edit", name="coleccion_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, coleccion $coleccion)
    {
        $deleteForm = $this->createDeleteForm($coleccion);
        $editForm = $this->createForm('ELE\EditorialBundle\Form\coleccionType', $coleccion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($coleccion);
            $em->flush();

            return $this->redirectToRoute('coleccion_edit', array('id' => $coleccion->getId()));
        }

        return $this->render('coleccion/edit.html.twig', array(
            'coleccion' => $coleccion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a coleccion entity.
     *
     * @Route("/{id}", name="coleccion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, coleccion $coleccion)
    {
        $form = $this->createDeleteForm($coleccion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($coleccion);
            $em->flush();
        }

        return $this->redirectToRoute('coleccion_index');
    }

    /**
     * Creates a form to delete a coleccion entity.
     *
     * @param coleccion $coleccion The coleccion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(coleccion $coleccion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('coleccion_delete', array('id' => $coleccion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
