<?php

namespace Meetserious\SiteProBundle\Listener;

use Meetserious\SiteProBundle\Entity\Restaurants;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\Common\Util\Debug as Debug;
use Meetserious\SiteProBundle\Util\Box;

class RestaurantsListener {
    
    /**
     * Persist after Offers
     */
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        if ($entity instanceof Restaurants) {
            $ville = Box::slugize($entity->getVille());
            $zipcode = $entity->getZipcode();
            if($idvilles = $em->getRepository('SiteBundle:Villes')->findIdByVilleAndZipcode($ville, $zipcode)){
                $ville = $em->getRepository('SiteBundle:Villes')->find($idvilles['id']);
                $entity->setCitiesId($ville);
                $em->persist($entity);
                $em->flush();
            }
            $entity->setDateUpdated(new \Datetime('now'));
        }
    }
    
    
    /**
     * Persist after Offers
     */
    public function postUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        if ($entity instanceof Restaurants) {
            $ville = Box::slugize($entity->getVille());
            $zipcode = $entity->getZipcode();
            if($idvilles = $em->getRepository('SiteBundle:Villes')->findIdByVilleAndZipcode($ville, $zipcode)){
                $ville = $em->getRepository('SiteBundle:Villes')->find($idvilles['id']);
                $entity->setCitiesId($ville);
                $em->persist($entity);
                $em->flush();
            }
            $entity->setDateUpdated(new \Datetime('now'));
        }
    }
}
?>
