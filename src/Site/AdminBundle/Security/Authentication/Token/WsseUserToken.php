<?php

namespace Meetserious\SiteProBundle\Security\Authentication\Token;
use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

/**
 * Class Token :
 * Un jeton représente les données d'authentification des utilisateurs présents dans la demande. 
 * Une fois qu'une demande est authentifié, le jeton permet de conserver les données de l'utilisateur, 
 * et fournit ces données à travers le contexte de sécurité
 * AbstractToken: Toutes les fct des Token
 */
class WsseUserToken extends AbstractToken
{
    public $created;
    public $digest;
    public $nonce;

    public function getCredentials()
    {
        return '';
    }
}

?>
