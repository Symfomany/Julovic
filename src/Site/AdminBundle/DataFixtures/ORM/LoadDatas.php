<?php

namespace Site\AdminBundle\DataFixtures\ORM;

use Site\AdminBundle\Entity\Administrateurs;
use Site\AdminBundle\Entity\Articles;
use Site\AdminBundle\Entity\Categories;
use Site\AdminBundle\Entity\Comments;
use Site\AdminBundle\Entity\Links;
use Site\AdminBundle\Entity\Tags;
use Site\AdminBundle\Entity\Parametres;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class LoadDatas implements FixtureInterface {

    public function load(ObjectManager $manager) {

        /* Administrateurs Loading */
        $administrateur = new Administrateurs();
        $administrateur->setFirstname('Julien');
        $administrateur->setLastname('Boyer');
        $administrateur->setEmail('zuzu38080@gmail.com');
        $administrateur->setToken(sha1('zuzu38080@gmail.com'));
        $administrateur->setEnabled(1);
        $pass = 'hddinner';
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($pass, $administrateur->getSalt());
        $administrateur->setPassword($password);
        $manager->persist($administrateur);
        
        $administrateur2 = new Administrateurs();
        $administrateur2->setFirstname('Julien');
        $administrateur2->setLastname('Boyer');
        $administrateur2->setEmail('jboyer@click-call.com');
        $administrateur2->setToken(sha1('jboyer@click-call.com'));
        $administrateur2->setEnabled(1);
        $pass = 'hddinner';
        $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($pass, $administrateur2->getSalt());
        $administrateur2->setPassword($password);
        $manager->persist($administrateur2);
        
        
        /* Category Loading */
        $category = new Categories();
        $category ->setTitle('Test Alpha de category');
        $category ->setDescription('Mauris non purus molestie risus volutpat adipiscing id quis est. Suspendisse consequat ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.
                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.');
        
        $manager->persist($category);
        $category2 = new Categories();
        $category2 ->setTitle('Test Beta de category');
        $category2 ->setDescription('Ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.
                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.');
        $manager->persist($category2);
        
        /* Articles Loading */
        $article = new Articles();
        $article ->setCategory($category2);
        $article ->setType('post');
        $article ->setTitle('Test Alpha de Article');
        $article ->setResume('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet mi risus. Sed eget quam neque. Curabitur suscipit ornare justo vel pretium. Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit et egestas at, porttitor quis libero. Mauris convallis, augue sed consectetur malesuada, sapien nibh sodales mauris, vel adipiscing lorem eros ac risus. Nullam ac leo sed nulla molestie luctus.');
        $article ->setContent('Mauris non purus molestie risus volutpat adipiscing id quis est. Suspendisse consequat ullamcorper ullamcorper. Nulla porttitor placerat turpis a egestas. Morbi a eros tempor purus volutpat accumsan non tristique tortor. Suspendisse sapien mauris, accumsan sed aliquet eu, congue quis ligula. Phasellus et eros in ante laoreet luctus. Aliquam erat dui, scelerisque id scelerisque sit amet, consectetur ut neque. Maecenas felis enim, aliquam sed rhoncus vel, porttitor ac lectus. Ut facilisis ipsum vel neque lobortis posuere. Duis condimentum massa et neque commodo sed dapibus sem semper. Curabitur nibh enim, volutpat ac dictum rutrum, consequat quis ipsum. Mauris ac purus dui.
                        Donec eget mi non justo rhoncus aliquam. Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.');
        $article ->setTag('alpha,arceaux,arcade');
        $article ->setActive(1);
        $article ->setSpecial(1);
        $article ->setNotes(14);
        
        
        $article2 = new Articles();
        $article2 ->setCategory($category);
        $article2 ->setType('page');
        $article2 ->setTitle('Test Beta de article2');
        $article2 ->setResume('Duis sit amet mi risus. Sed eget quam neque. Curabitur suscipit ornare justo vel pretium. Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit et egestas at, porttitor quis libero. Mauris convallis, augue sed consectetur malesuada, sapien nibh sodales mauris, vel adipiscing lorem eros ac risus. Nullam ac leo sed nulla molestie luctus.');
        $article2 ->setContent('Suspendisse pretium sollicitudin dui eget porta. Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. Quisque id magna a nunc ornare iaculis non nec neque. In hac habitasse platea dictumst. Sed suscipit massa nec libero elementum consectetur. Phasellus nec risus magna. Nullam interdum fringilla purus id consequat.');
        $article2 ->setTag('beta,bebe,berceaux,bobos');
        $article2 ->setActive(1);
        $article2 ->setSpecial(2);
        $article2 ->setNotes(12);
        
        /*Comments loading*/
        $comment = new Comments();
        $comment->setContent('Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ');
        $comment->setEmail('test@free.fr');

        $comment2 = new Comments();
        $comment2->setContent('Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis  ');
        $comment2->setEmail('lala@free.fr');

        $manager->persist($comment);
        $manager->persist($comment2);
        

        /*Links loading*/
        $links = new Links();
        $links->setTitle('Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ');
        $links->setLink('http://www.free.fr');
        $links->setDescription('Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit ');
        
        $links2 = new Links();
        $links2->setTitle('Nunc tincidunt aliquet elementum. Donec non orci dolor, quis fermentum massa. ');
        $links2->setLink('http://www.free.fr');
        $links2->setDescription('Praesent orci erat, hendrerit bibendum pretium quis, placerat at eros. Curabitur convallis scelerisque neque nec tincidunt. Aliquam ut quam at nulla consectetur hendrerit in et tortor. In nisl libero, hendrerit ');
        $manager->persist($links);
        $manager->persist($links2);
        
        $tag = new Tags();
        $tag->setTag('Alpha ');
        $manager->persist($tag);
        
        $tag = new Tags();
        $tag->setTag('Beta ');
        $manager->persist($tag);
        
        $tag = new Tags();
        $tag->setTag('Arceaux ');
        $manager->persist($tag);
        
        $tag = new Tags();
        $tag->setTag('Berceaux ');
        $manager->persist($tag);
        
        /*Parameters loading*/
        $param = new Parametres();
        $param->setNomSite('Blog Test');
        $param->setNomAdmin('Boyer');
        $param->setUrlSite('http://www.bo.ju');
        $param->setEmailAdmin('zuzu38080@gmail.com');
        $param->setAdresseAdmin('69 Avenue Victor Hugo');
        $param->setVilleAdmin('Neuilly-Plaisance');
        $param->setCpAdmin('93360');
        $param->setTelAdmin('0474272459');
        $param->setPortAdmin('0674585648');
        $manager->persist($param);

        
        
        $manager->persist($article);
        $manager->persist($article2);
        
        $manager->flush();
    }
}

?>
