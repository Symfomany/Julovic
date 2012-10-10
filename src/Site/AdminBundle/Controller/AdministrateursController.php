<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Administrateurs;
use Site\AdminBundle\Form\AdministrateursType;

/**
 * Administrateurs controller.
 *
 */
class AdministrateursController extends Controller
{
    /**
     * Lists all Administrateurs entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Administrateurs')->findAll();

        return $this->render('SiteAdminBundle:Administrateurs:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Administrateurs entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Administrateurs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateurs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Administrateurs:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Administrateurs entity.
     *
     */
    public function newAction()
    {
        $entity = new Administrateurs();
        $form   = $this->createForm(new AdministrateursType(), $entity);

        return $this->render('SiteAdminBundle:Administrateurs:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Administrateurs entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Administrateurs();
        $form = $this->createForm(new AdministrateursType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrateurs_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Administrateurs:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Administrateurs entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Administrateurs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateurs entity.');
        }

        $editForm = $this->createForm(new AdministrateursType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Administrateurs:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Administrateurs entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Administrateurs')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Administrateurs entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new AdministrateursType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrateurs_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Administrateurs:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Administrateurs entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Administrateurs')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Administrateurs entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('administrateurs'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
