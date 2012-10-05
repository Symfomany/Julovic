<?php

namespace Site\AdminBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Common\Util\Debug;


class SecurityController extends ContainerAware {

    public function indexAction() {
        return $this->container->get('templating')->renderResponse('SiteAdminBundle:Default:index.html.twig');
    }

    public function loginAction() {
        
        $request = $this->container->get('request');
        $session = $this->container->get('session');

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->container->get('templating')->renderResponse('SiteAdminBundle:Security:login.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
//                    'facebookAppId' => $this->container->getParameter('facebookAppId')
                    'facebookAppId' => 'dfhgdfhoghd fghofdhog'
                ));
    }


}
