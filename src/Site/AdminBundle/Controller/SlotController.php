<?php

namespace Site\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\AdminBundle\Entity\Articles;
use Site\AdminBundle\Form\SearchType;
use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Sidebar controller.
 *
 */
class SlotController extends Controller {

    public function sidebarAction() {
        return $this->render('SiteAdminBundle:Slot:sidebar.html.twig');
    }

    public function flashdatasAction() {
        return $this->render('SiteAdminBundle:Slot:flashdatas.html.twig');
    }

    public function searchajaxAction() {
        $request = $this->getRequest();
          if ($request->isXmlHttpRequest()) {   
              $em = $this->getDoctrine()->getEntityManager();

                $tab = Array();
                $result = Array();
                $result2 = null;
                $search =  $request->request->get('search', null);
                $tab[] = $search;
                
                $que = $this->container->getParameter('SearchAjaxQuery');

                $dql = $em->createQuery($que[0])
                                     ->setParameter(1, "%".trim($search)."%");
                $dql->setMaxResults(10);
                $result = $dql->getScalarResult();
                
                for($i = 1 ; $i < count($que); $i++){
                    $dql2 = $em->createQuery($que[$i])
                        ->setParameter(1, "%".trim($search)."%");
                        $dql2->setMaxResults(10);
                        $result2 = $dql2->getScalarResult();
                        $result_final = array_merge((array)$result, (array)$result2);
                }

                $tab = Array();
                if(!empty($result_final)){
                    foreach($result_final as $one){
                         $tab[] = $one;
                    }
                }
                    $return = json_encode($tab);
            return new Response($return, 200, array('Content-Type' => 'application/json')); //make sure it has the correct content type
        }
    }

    /*
     * ->createQuery('
      SELECT p, c FROM AcmeStoreBundle:Product p
      JOIN p.category c
      WHERE p.id = :id'
      )->setParameter('id', $id);
     * 
     */

    public function searchAction() {

        $form = $this->createForm(new SearchType());
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getEntityManager();

        if ('POST' === $request->getMethod()) {
            $form->bind($request);
            if ($form->isValid()) {
                $field = $form->getData();
                $search_word = $field['search'];
                $que = $this->container->getParameter('SearchQuery');
                $dql = $em->createQuery($que)
                        ->setParameters(
                        array(
                            'title' => $search_word,
                            'titleb' => $search_word,
                        ));

                $paginator = $this->get('knp_paginator');
                $pagination = $paginator->paginate($dql, $this->get('request')->query->get('page', 1), 5);  //page number/, 10/limit per page/ );

                return $this->render('SiteAdminBundle:Slot:search_result.html.twig', array(
                            'search_word' => $search_word,
                            'pagination' => $pagination,
                            'form' => $form->createView()
                        ));
            }
        }
        return $this->render('SiteAdminBundle:Slot:search.html.twig', array('form' => $form->createView()));
    }

}
