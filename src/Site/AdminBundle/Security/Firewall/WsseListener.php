<?php

namespace Meetserious\SiteProBundle\Security\Firewall;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Security\Http\Firewall\ListenerInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Acme\DemoBundle\Security\Authentication\Token\WsseUserToken;

/**
 * Le listener est responsable de Fielding demandes au pare-feu et en appelant le fournisseur d'authentification 
 * - un constructeur qui prend comme paramètres les services définis dans notre fichier services.xml.
 * - une méthode qui intercepte la requête est execute le code avant l'affichage de la page (handle()). 
 */
class WsseListener implements ListenerInterface
{
    protected $securityContext;
    protected $authenticationManager;

    
    /**
     *  Le constructeur qui prend comme paramètres les services définis dans notre fichier services.xml.
     * @param SecurityContextInterface $securityContext
     * @param AuthenticationManagerInterface $authenticationManager 
     */
    public function __construct(SecurityContextInterface $securityContext, AuthenticationManagerInterface $authenticationManager)
    {
        $this->securityContext = $securityContext;
        $this->authenticationManager = $authenticationManager;
    }
    
    /**
     * La méthode qui intercepte la requête est execute le code avant l'affichage de la page (handle()). 
     * C'est dedans où se déroule l'authentification de l'utilisateur via la méthode authenticate().
     * @param GetResponseEvent $event
     * @return type 
     */

    public function handle(GetResponseEvent $event)
    {
        $request = $event->getRequest();

        // Checks the request for the expected X-WSSE header 
//        if ($request->headers->has('x-wsse')) {

            $wsseRegex = '/UsernameToken Username="([^"]+)", PasswordDigest="([^"]+)", Nonce="([^"]+)", Created="([^"]+)"/';

            if (preg_match($wsseRegex, $request->headers->get('x-wsse'), $matches)) {
                
                //Creates our token using that information
                $token = new WsseUserToken();
                $token->setUser($matches[1]);

                $token->digest   = $matches[2];
                $token->nonce    = $matches[3];
                $token->created  = $matches[4];

                try {
                    //Passes the token on to the authentication manager
                    $returnValue = $this->authenticationManager->authenticate($token);

                    if ($returnValue instanceof TokenInterface) {
                        return $this->securityContext->setToken($returnValue);
                    } else if ($returnValue instanceof Response) {
                        return $event->setResponse($returnValue);
                    }
                } catch (AuthenticationException $e) {
                    // you might log something here
                }
            }
//        }
//
//        //Si les infos fournis ne sont pas corrects
//        $response = new Response();
//        $response->setStatusCode(403);
//        $event->setResponse($response);
    }
}

?>
