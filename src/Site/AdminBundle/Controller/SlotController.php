<?php

namespace Site\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\AdminBundle\Entity\Articles;
use Site\AdminBundle\Form\SearchType;
use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\Request;

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
                   $field =$form->getData();
                    $search_word = $field['search'];
                    $que = $this->container->getParameter('SearchQuery');
                   $dql = $em->createQuery($que)
                        ->setParameters(
                                array(
                                    'title' =>$search_word,
                                    'titleb' => $search_word,
                                    ));

                    $paginator = $this->get('knp_paginator'); 
                    $pagination = $paginator->paginate( $dql, $this->get('request')->query->get('page',1), 5);  //page number/, 10/limit per page/ );
              
                return $this->render('SiteAdminBundle:Slot:search_result.html.twig', 
                        array(
                                    'search_word' => $search_word,
                                    'pagination' => $pagination
                            ));
            }
        }
//
//        $em = $this->getDoctrine()->getEntityManager();
//        $qb = $em->getRepository('SiteAdminBundle:Articles')->createQueryBuilder('c');
//
//        $factory = new FilterFactory($em);
//
//        $filter = $factory->create($article, 'c');
//        if ($filter->toExpr() != false) {
//            $qb->where($filter->toExpr());
//
//            foreach ($filter->toParameters() as $parameter) {
//                $qb->setParameter($parameter['title'], $parameter['value']);
//            }
//        }
//
//        $articles_result = $qb->setFirstResult(0)->setMaxResults(100)->getQuery()->getResult();
//        exit(Debug::dump($articles_result));
        return $this->render('SiteAdminBundle:Slot:search.html.twig', array('form' => $form->createView()));
    }

}
