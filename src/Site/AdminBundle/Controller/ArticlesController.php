<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\AdminBundle\Entity\Articles;
use Site\AdminBundle\Entity\Medias;
use Site\AdminBundle\Form\ArticlesType;
use Site\AdminBundle\Form\Type\MediasType;
use Doctrine\Common\Util\Debug;

class ArticlesController extends Controller {
    
    protected $breadcrumbs;
    protected $limit;
    protected $common;
    
     public function preExecute() {
        $this->breadcrumbs = $this->get("white_october_breadcrumbs");
        $this->breadcrumbs ->addItem("Articles", $this->get("router")->generate("articles"));
        $this->limit = $this->container->getParameter('limit_per_page');
        $this->common = $this->get("commoncontroller");
        
    }

    public function indexAction() {
        $pagination =   $this->common->setLimit(3);
        $pagination =   $this->common->getList('Articles', null, 'position');
        return $this->render('SiteAdminBundle:Articles:index.html.twig', array(
                    'pagination' => $pagination
         ));
    }

    public function displayingAction($page = 5) {
        $pagination =   $this->common->setLimit(3);
        $pagination =   $this->common->getList('Articles', null, 'position');
        return $this->render('SiteAdminBundle:Articles:index.html.twig', array(
                    'pagination' => $pagination
         ));
    }

    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('SiteAdminBundle:Articles')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('SiteAdminBundle:Articles:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView()));
    }

    /**
     * Displays a form to create a new Articles entity.
     *
     */
    public function newAction() {
        $entity = new Articles();
        
        $medias = new Medias();
        $medias->setArticle($entity);
        $entity->addMedia($medias);
        $form = $this->createForm(new ArticlesType(), $entity);
        
        return $this->render('SiteAdminBundle:Articles:new.html.twig', array(
                'entity' => $entity,
                'form' => $form->createView()
        ));
    }

    /**
     * Modiy Position
     */
    public function displayAction(Request $request)
    {
         $this->common->setPosition('Articles');
         return new Response(1, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    /**
     * Modiy Position
     */
    public function positionAction(Request $request)
    {
         $this->common->setPosition('Articles');
         return new Response(1, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
    }

    /**
     * Modiy Activation
     */
    public function activationAction($id, $bool = 1)
    {
         $this->common->setActive('Articles',$id,  $bool);
        return $this->redirect($this->generateUrl('articles'));
    }
    
    /**
     * Creates a new Articles entity.
     *
     */
    public function createAction(Request $request) {
        $user = $this->get('security.context')->getToken()->getUser();
        $entity = new Articles();
        $medias = new Medias();
        $medias->setArticle($entity);
        $medias->setAdministrateur($user);
        $entity->addMedia($medias);
        
        $form = $this->createForm(new ArticlesType(), $entity);
        $form->bind($request);


        if ($form->isValid()) {
            
            
//             foreach ($form->getMedias() as $media) {
//                    if ($media->file === null)
//                        $offer->removeMedias($media);
//                    else
//                        $media->upload();
//                }
            
              $medias->upload();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('success', 'Votre changement a été pris en compte!');

            return $this->redirect($this->generateUrl('articles_show', array('id' => $entity->getId())));
        }

        return $this->render('SiteAdminBundle:Articles:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                ));
    }

    /**
     * Displays a form to edit an existing Articles entity.
     *
     */
    public function editAction($id) {
        $breadcrumbs = $this->get("white_october_breadcrumbs");
        // Example with parameter injected into translation "user.profile"
        $breadcrumbs->addItem('Test', 'http://www.google.com', array("%user%" => 'ok'));

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }

        $editForm = $this->createForm(new ArticlesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);


        return $this->render('SiteAdminBundle:Articles:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Edits an existing Articles entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('SiteAdminBundle:Articles')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Articles entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ArticlesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            $this->get('session')->setFlash('success', 'Votre changement a été pris en compte!');

            return $this->redirect($this->generateUrl('articles_edit', array('id' => $id)));
        }

        return $this->render('SiteAdminBundle:Articles:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
    }

    /**
     * Deletes a Articles entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('SiteAdminBundle:Articles')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Articles entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articles'));
    }

    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

}
