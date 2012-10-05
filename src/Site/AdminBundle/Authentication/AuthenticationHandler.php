<?php

namespace Site\AdminBundle\Authentication;

use Symfony\Component\Routing\RouterInterface,
    Symfony\Component\HttpFoundation\RedirectResponse,
    Symfony\Component\HttpFoundation\Request,
    Doctrine\ORM\EntityManager,
    Site\AdminBundle\Entity\Administrateurs,
    Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface,
    Symfony\Component\Security\Http\Authentication\AuthenticationFailureHandlerInterface,
    Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface,
    Symfony\Component\Security\Core\Authentication\Token\TokenInterface,
    Symfony\Component\DependencyInjection\ContainerAwareInterface,
    Symfony\Component\DependencyInjection\ContainerAware,
    Symfony\Component\HttpFoundation\Session\Session,
    Symfony\Component\Security\Core\Exception\AuthenticationException;

class AuthenticationHandler implements AuthenticationSuccessHandlerInterface, AuthenticationFailureHandlerInterface, LogoutSuccessHandlerInterface {

    protected $router;
    protected $em;

    /**
     * Constructor Dependances
     * @param RouterInterface $router
     * @param EntityManager $em
     * @param Session $session 
     */
    public function __construct(RouterInterface $router, EntityManager $em, Session $session) {
        $this->router = $router;
        $this->em = $em;
        $this->session = $session;
    }

    /**
     * Method Authentification Sucess
     * @param Request $request
     * @param TokenInterface $token
     * @return \Symfony\Component\HttpFoundation\RedirectResponse 
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token) {
        $restaurant = $token->getUser();
//
//        /* FirstTime Connexion */
//        if ($restaurant->getDateAuth() == null || $restaurant->getDateAuth()->format('H:i') == '00:00')
//            $this->session->set('firstime', true);
//        else
//            $this->session->set('firstime', false);
//
//        $restaurant->setDateAuth(new \DateTime('now'));
//        $this->em->persist($restaurant);
//        $this->em->flush();

        return new RedirectResponse($this->router->generate('home'));
    }

    /**
     * Auth Failed
     * @param Request $request
     * @param AuthenticationException $exception
     * @return \Symfony\Component\HttpFoundation\RedirectResponse 
     */
    public function onAuthenticationFailure(Request $request, AuthenticationException $exception) {
        $referer = $request->headers->get('referer');
        $request->getSession()->setFlash('error', $exception->getMessage());
        return new RedirectResponse($referer);
    }

    /**
     * Logout Success
     */
    public function onLogoutSuccess(Request $request) {
        // redirect the user to where they were before the login process begun. 
        $referer_url = $request->headers->get('referer');
        $response = new RedirectResponse($referer_url);
        return $response;
    }

}

?>
