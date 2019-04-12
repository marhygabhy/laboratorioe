<?php

namespace ELE\EditorialBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ELE\EditorialBundle\Entity\pais;
use ELE\EditorialBundle\Form\paisType;

/**
 * pais controller.
 *
 * @Route("/pais")
 */
class paisController extends Controller
{
    /**
     * Lists all pais entities.
     *
     * @Route("/", name="pais_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pais = $em->getRepository('EditorialBundle:pais')->findAll();

        return $this->render('pais/index.html.twig', array(
            'pais' => $pais,
        ));
    }

    /**
     * Creates a new pais entity.
     *
     * @Route("/new", name="pais_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $pais = new pais();
        $form = $this->createForm('ELE\EditorialBundle\Form\paisType', $pais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pais);
            $em->flush();

            return $this->redirectToRoute('pais_show', array('id' => $pais->getId()));
        }

        return $this->render('pais/new.html.twig', array(
            'pais' => $pais,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pais entity.
     *
     * @Route("/{id}", name="pais_show")
     * @Method("GET")
     */
    public function showAction(pais $pais)
    {
        $deleteForm = $this->createDeleteForm($pais);

        return $this->render('pais/show.html.twig', array(
            'pais' => $pais,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pais entity.
     *
     * @Route("/{id}/edit", name="pais_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, pais $pais)
    {
        $deleteForm = $this->createDeleteForm($pais);
        $editForm = $this->createForm('ELE\EditorialBundle\Form\paisType', $pais);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pais);
            $em->flush();

            return $this->redirectToRoute('pais_edit', array('id' => $pais->getId()));
        }

        return $this->render('pais/edit.html.twig', array(
            'pais' => $pais,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a pais entity.
     *
     * @Route("/{id}", name="pais_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, pais $pais)
    {
        $form = $this->createDeleteForm($pais);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($pais);
            $em->flush();
        }

        return $this->redirectToRoute('pais_index');
    }

    /**
     * Creates a form to delete a pais entity.
     *
     * @param pais $pais The pais entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(pais $pais)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pais_delete', array('id' => $pais->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
