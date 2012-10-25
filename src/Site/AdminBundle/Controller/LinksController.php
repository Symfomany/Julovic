<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Links;
use Site\AdminBundle\Form\LinksType;

/**
 * Links controller.
 *
 */
class LinksController extends Controller
{
        
    protected $limit;
    protected $breadcrumbs;
    protected $common;
    
    public function preExecute() {
        $this->breadcrumbs = $this->get("white_october_breadcrumbs");
        $this->breadcrumbs->addItem("Liens", $this->get("router")->generate("links"));
        $this->limit = $this->container->getParameter('limit_per_page');
        $this->common = $this->get("commoncontroller");
    }
    
    /**
     * Lists all Links entities.
     *
     */
    public function indexAction()
    {
        $pagination =   $this->common->getList('Links', null, 'position');
        return $this->render('SiteAdminBundle:Links:index.html.twig', array(
            'pagination' => $pagination
        ));
    }
    
    
    /**
     * Modiy Position
     */
    public function positionAction(Request $request)
    {
         $this->common->setPosition('Links');
         return new Response(1, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    /**
     * Finds and displays a Links entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SiteAdminBundle:Links')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Links entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('SiteAdminBundle:Links:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
        /**
     * Modiy Activation
     */
    public function activationAction($id, $bool = 1)
    {
         $this->common->setActive('Links',$id,  $bool);
        return $this->redirect($this->generateUrl('links'));
    }
    /**
     * Displays a form to create a new Links entity.
     *
     */
    public function newAction()
    {
        $entity = new Links();
        $form   = $this->createForm(new LinksType(), $entity);
        return $this->render('SiteAdminBundle:Links:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Links entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Links();
          $entity->setActive(true);
        $form = $this->createForm(new LinksType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('links_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Links:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Links entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Links')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Links entity.');
        }

        $editForm = $this->createForm(new LinksType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Links:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Links entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Links')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Links entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new LinksType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('links_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Links:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Links entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Links')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Links entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('links'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
