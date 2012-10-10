<?php

namespace Site\AdminBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Site\AdminBundle\Entity\Administrateurs;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class LoadRestaurants implements FixtureInterface {

    public function load(ObjectManager $manager) {

        /* Administrateurs Loading */
        $administrateur = new Administrateurs();
        $administrateur->setFirstname('Julien');
        $administrateur->setLastname('Boyer');
        $administrateur->setEmail('jboyer@click-call.com');
        $administrateur->setToken(sha1('jboyer@click-call.com'));
        $administrateur->setEnabled(1);
        $pass = 'hddinner';
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($pass, $administrateur->getSalt());
        $administrateur->setPassword($password);
        $manager->persist($administrateur);
        
        $manager->flush();
    }

    public function getOrder() {
        return 1; // the order in which fixtures will be loaded
    }

}

?>
