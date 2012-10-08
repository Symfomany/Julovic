<?php

namespace Site\AdminBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\NoResultException;


class SideBarRepository extends EntityRepository
{


    public function getSidebar($params =  Array())
    {
        
            
        $query = $this->createQueryBuilder('u');
        
        $query->select();
        $query->from();
        $query->leftJoin('u.offersDeclinaisons', 'v');
        
        $query->where('u.restaurant = :rid')->setParameter('rid', $id);
             
        if ($month != null && $year != null && $week == null) {
            $query->andWhere('v.dateMeal BETWEEN  :begin AND :end')
                 ->setParameter('begin', new \DateTime($year . '-' . $month . '-01'))
                 ->setParameter('end', new \DateTime($year . '-' . $month . '-31'));
        }

        if ($week != null) {
            $lun = new \DateTime($week);
            $dim = new \DateTime($week);
            $dim->modify('+1week -1 day');
            $query->andWhere('v.dateMeal BETWEEN  :begin AND :end')
                        ->setParameter('begin',$lun->format('Y-m-d'))
                        ->setParameter('end', $dim->format('Y-m-d'));
        }
        
        return $query->getQuery()->getResult();
        
    }


}
?>
