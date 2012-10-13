<?php

namespace Meetserious\SiteBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Meetserious\SiteBundle\Entity\Restaurants;

class UserProvider implements UserProviderInterface {

    public function loadUserByUsername($username) {
        $q = $this
                ->createQueryBuilder('u')
                ->where('u.email = :email')
                ->setParameter('email', $username)
                ->getQuery();

        try {
            // The Query::getSingleResult() method throws an exception
            // if there is no record matching the criteria.
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin AcmeUserBundle:User object identified by "%s".', $username), null, 0, $e);
        }

        return $user;
    }

    public function updateLastLogin($id) {
        $date = new \DateTime();
        $query = $this->getEntityManager()
                ->createQuery("UPDATE SiteProBundle:Restaurants u SET
                 u.date_auth = :lastLogin
    WHERE u.id_us = :id_us")
                ->setParameter("id_us", (int) $id)
                ->setParameter("lastLogin", $date->format('Y-m-d H:i:s'));
        $query->execute();
    }

    /**
     * Do nothing. They are here to keep the comptability with UserProviderInterface.
     */
    public function supportsClass($class) {
        return true;
    }

    public function refreshUser(UserInterface $user) {
        
    }

}

?>
