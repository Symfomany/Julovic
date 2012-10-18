<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Categories;
use Site\AdminBundle\Form\CategoriesType;

/**
 * Categories controller.
 *
 */
class CategoriesController extends Controller
{
    
    public function preExecute() {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        $breadcrumbs->addItem("Categories", $this->get("router")->generate("categories"));
    }
    
    /**
     * Lists all Categories entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('SiteAdminBundle:Categories')->findAll();

        return $this->render('SiteAdminBundle:Categories:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Categories entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Categories:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Categories entity.
     *
     */
    public function newAction()
    {
        $entity = new Categories();
        $form   = $this->createForm(new CategoriesType(), $entity);

        return $this->render('SiteAdminBundle:Categories:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Categories entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Categories();
        $form = $this->createForm(new CategoriesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categories_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Categories:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Categories entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categories entity.');
        }

        $editForm = $this->createForm(new CategoriesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Categories:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Categories entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Categories')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Categories entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CategoriesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categories_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Categories:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Categories entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Categories')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Categories entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categories'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
