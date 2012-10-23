<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Notifications;
use Site\AdminBundle\Form\NotificationsType;

/**
 * Notifications controller.
 *
 */
class NotificationsController extends Controller
{
    /**
     * Lists all Notifications entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Notifications')->findAll();

        return $this->render('SiteAdminBundle:Notifications:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Notifications entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Notifications')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notifications entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Notifications:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Notifications entity.
     *
     */
    public function newAction()
    {
        $entity = new Notifications();
        $form   = $this->createForm(new NotificationsType(), $entity);

        return $this->render('SiteAdminBundle:Notifications:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Notifications entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Notifications();
        $form = $this->createForm(new NotificationsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notifications_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Notifications:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Notifications entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Notifications')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notifications entity.');
        }

        $editForm = $this->createForm(new NotificationsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Notifications:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Notifications entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Notifications')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Notifications entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new NotificationsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('notifications_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Notifications:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Notifications entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Notifications')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Notifications entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('notifications'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
