<?php
namespace Site\AdminBundle\Controller;

use Doctrine\Common\Util\Debug;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAware;
use Doctrine\ORM\EntityManager;
use Knp\Component\Pager\Paginator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;


class CommonController  {

    protected $entity;
    protected $em;
    protected $limit;
    protected $request;
    protected $response;
    protected $session;

    public function __construct(EntityManager $em, Request $request, Paginator $paginator, Session $session){
        $this->em = $em;
        $this->request = $request;
        $this->paginator = $paginator;
        $this->session = $session;
        $this->limit =  5;
    }
    
    public function getList($entity= 'Medias', $limit = 0,$orderBy = 'id'){
        $dql = "SELECT a FROM SiteAdminBundle:".$entity." a ORDER  BY a.".$orderBy;
        $query = $this->em->createQuery($dql);
        $pagination = $this->paginator->paginate($query, $this->request->query->get('page', 1), $this->limit);  //page number/, 10/limit per page/ );
        return $pagination;
    }
    
    public function setPosition($entity= 'Categories'){
        $items =$this->request->request->get('menu', null); 
            foreach($items as $key => $item){
                $entity = $this->em->getRepository('SiteAdminBundle:Articles')->find($item);
                $entity->setPosition((int)$key);
                $this->em->persist($entity);
                $this->em->flush();
            }
             return true;
    }
    
    public function setDisplay($number = 5){
             $this->limit = $number;
             return true;
    }

    public function setActive($entity= 'Categories', $find, $bool = true){
                $entity = $this->em->getRepository('SiteAdminBundle:'.$entity)->find($find);
                if(!$entity){
                    throw  new NotFoundHttpException('Entity not found!');
                }
                $entity->setActive($bool);
                $this->em->persist($entity);
                $this->em->flush();
                $this->session->setFlash('success', 'Votre changement a été pris en compte!');
                return true;
    }
    
    public function setLimit($limit = 5){
        $this->limit = $limit;
    }
    
    public function getLimit(){
     return $this->limit;
    }
    
}
?>
