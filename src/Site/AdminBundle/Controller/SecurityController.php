<?php
namespace Site\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Common\Util\Debug;
use Site\AdminBundle\Form\ConnexionType;


class SecurityController extends Controller {

    public function indexAction() {
        return $this->get('templating')->renderResponse('SiteAdminBundle:Default:index.html.twig');
    }

    public function loginAction() {
        
        $request = $this->get('request');
        $session = $this->get('session');
        
        $form = $this->createForm(new ConnexionType());
        
        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->get('templating')->renderResponse('SiteAdminBundle:Security:login.html.twig', array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error' => $error,
                    'form' => $form->createView()
                ));
    }


}
