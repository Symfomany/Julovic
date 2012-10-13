<?php
namespace Meetserious\SiteBundle\Security\Users;
 
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Meetserious\SiteProBundle\Entity\Restaurants;

 
class UserProvider implements UserProviderInterface {
    
    public function loadUserByUsername($username)
    {
          return $this->getEntityManager()
         ->createQuery('SELECT u FROM
         SiteProBundle:Restaurants u
         WHERE u.email = :username')
         ->setParameters(array(
                       'username' => $username
                        ))
         ->getOneOrNullResult();
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', $class));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Meetserious\SiteProBundle\Entity\Restaurants';
    }
}
?>
