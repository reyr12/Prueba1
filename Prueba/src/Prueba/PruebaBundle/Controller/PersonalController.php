<?php

namespace Prueba\PruebaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Prueba\PruebaBundle\Entity\Personal;
use Prueba\PruebaBundle\Form\PersonalType;

/**
 * Personal controller.
 *
 */
class PersonalController extends Controller
{
    /**
     * Lists all Personal entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $personals = $em->getRepository('PruebaBundle:Personal')->findAll();

        return $this->render('personal/index.html.twig', array(
            'personals' => $personals,
        ));
    }

    /**
     * Creates a new Personal entity.
     *
     */
    public function newAction(Request $request)
    {
        $personal = new Personal();
        $form = $this->createForm(new PersonalType(), $personal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personal);
            $em->flush();

            return $this->redirectToRoute('personal_show', array('id' => $personal->getId()));
        }

        return $this->render('personal/new.html.twig', array(
            'personal' => $personal,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Personal entity.
     *
     */
    public function showAction(Personal $personal)
    {
        $deleteForm = $this->createDeleteForm($personal);

        return $this->render('personal/show.html.twig', array(
            'personal' => $personal,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Personal entity.
     *
     */
    public function editAction(Request $request, Personal $personal)
    {
        $deleteForm = $this->createDeleteForm($personal);
        $editForm = $this->createForm(new PersonalType(), $personal);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($personal);
            $em->flush();

            return $this->redirectToRoute('personal_edit', array('id' => $personal->getId()));
        }

        return $this->render('personal/edit.html.twig', array(
            'personal' => $personal,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Personal entity.
     *
     */
    public function deleteAction(Request $request, Personal $personal)
    {
        $form = $this->createDeleteForm($personal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($personal);
            $em->flush();
        }

        return $this->redirectToRoute('personal_index');
    }

    /**
     * Creates a form to delete a Personal entity.
     *
     * @param Personal $personal The Personal entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Personal $personal)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('personal_delete', array('id' => $personal->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
