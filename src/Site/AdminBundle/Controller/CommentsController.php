<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Comments;
use Site\AdminBundle\Form\CommentsType;

/**
 * Comments controller.
 *
 */
class CommentsController extends Controller
{
        
    public function preExecute() {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Commentaires", $this->get("router")->generate("comments"));
    }
    
    
    /**
     * Lists all Comments entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Comments')->findAll();

        return $this->render('SiteAdminBundle:Comments:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Comments entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Comments:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Comments entity.
     *
     */
    public function newAction()
    {
        $entity = new Comments();
        $form   = $this->createForm(new CommentsType(), $entity);

        return $this->render('SiteAdminBundle:Comments:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Comments entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Comments();
        $form = $this->createForm(new CommentsType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('success', 'Votre changement a été pris en compte!');

            return $this->redirect($this->generateUrl('comments_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Comments:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Comments entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $editForm = $this->createForm(new CommentsType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Comments:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Comments entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Comments')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comments entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CommentsType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comments_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Comments:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Comments entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Comments')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comments entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comments'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
