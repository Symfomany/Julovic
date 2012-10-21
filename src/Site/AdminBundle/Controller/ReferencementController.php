<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Referencement;
use Site\AdminBundle\Form\ReferencementType;

/**
 * Referencement controller.
 *
 */
class ReferencementController extends Controller
{
    /**
     * Lists all Referencement entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Referencement')->findAll();

        return $this->render('SiteAdminBundle:Referencement:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Referencement entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Referencement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Referencement:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Referencement entity.
     *
     */
    public function newAction()
    {
        $entity = new Referencement();
        $form   = $this->createForm(new ReferencementType(), $entity);

        return $this->render('SiteAdminBundle:Referencement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Referencement entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Referencement();
        $form = $this->createForm(new ReferencementType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referencement_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Referencement:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Referencement entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Referencement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencement entity.');
        }

        $editForm = $this->createForm(new ReferencementType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Referencement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Referencement entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Referencement')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Referencement entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ReferencementType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('referencement_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Referencement:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Referencement entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Referencement')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Referencement entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('referencement'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
