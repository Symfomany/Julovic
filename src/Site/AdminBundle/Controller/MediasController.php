<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Medias;
use Site\AdminBundle\Form\MediasType;

/**
 * Medias controller.
 *
 */
class MediasController extends Controller
{
    
    protected $breadcrumbs;
    protected $common;
            
    public function preExecute() {
        $this->breadcrumbs = $this->get("white_october_breadcrumbs");
        $this->breadcrumbs->addItem("Medias", $this->get("router")->generate("medias"));
        $this->common = $this->get("commoncontroller");
    }
    
    
        /**
     * Modiy Activation
     */
    public function activationAction($id, $bool = 1)
    {
         $this->common->setActive('Medias',$id,  $bool);
        return $this->redirect($this->generateUrl('medias'));
    }
    
    /**
     * Lists all Medias entities.
     *
     */
    public function indexAction()
    {
        $user = $this->get('security.context')->getToken()->getUser();
       $em = $this->get('doctrine.orm.entity_manager'); 
       $dql = "SELECT a FROM SiteAdminBundle:Medias a";
       $query = $em->createQuery($dql);
        $paginator = $this->get('knp_paginator'); 
        $pagination = $paginator->paginate( $query, $this->get('request')->query->get('page',1), 5);  //page number/, 10/limit per page/ );

// parameters to template return compact('pagination');
        
//        $em = $this->getDoctrine()->getManager();
//        $entities = $em->getRepository('SiteAdminBundle:Medias')->findAll();

        return $this->render('SiteAdminBundle:Medias:index.html.twig', array(
            'pagination' => $pagination,
            'user' => $user
        ));
    }

    /**
     * Finds and displays a Medias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Medias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Medias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Medias entity.
     *
     */
    public function newAction()
    {
        $entity = new Medias();
        $form   = $this->createForm(new MediasType(), $entity);

        return $this->render('SiteAdminBundle:Medias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Medias entity.
     *
     */
    public function createAction(Request $request)
    {
        $user = $this->get('security.context')->getToken()->getUser();
        $entity = new Medias();
        $entity->setAdministrateur($user);
        $form = $this->createForm(new MediasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $entity->upload();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medias_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Medias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Medias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Medias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medias entity.');
        }

        $editForm = $this->createForm(new MediasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('SiteAdminBundle:Medias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Medias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Medias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Medias entity.');
        }

        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MediasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('medias_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Medias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Medias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Medias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Medias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('medias'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
