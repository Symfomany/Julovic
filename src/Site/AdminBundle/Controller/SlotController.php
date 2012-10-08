<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Site\AdminBundle\Entity\Links;
use Site\AdminBundle\Form\LinksType;
use Doctrine\Common\Util\Debug;

/**
 * Sidebar controller.
 *
 */
class SlotController extends Controller
{
   
    public function sidebarAction()
    {
        $em = $this->getDoctrine()->getManager();


        $params = $this->container->getParameter('sidebar_entities');
        
        $result = null;
//        exit(print_r($params));
        foreach($params as $key => $param){
            $result[$key][] = $em->getRepository("Site\AdminBundle\Entity\\".$key)->findBy(array(), array($param['orderBy']=> $param['orderWay']), $param['limit'], null);
        }
        
        return $this->render('SiteAdminBundle:Slot:sidebar.html.twig',
                array('entities' => $result)
                );
    }
   
    public function topmenuAction()
    {
        return $this->render('SiteAdminBundle:Slot:topmenu.html.twig');
    }
   
    public function flashdatasAction()
    {
        return $this->render('SiteAdminBundle:Slot:flashdatas.html.twig');
    }
}
