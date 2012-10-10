<?php

namespace Proxies\__CG__\Site\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Parametres extends \Site\AdminBundle\Entity\Parametres implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setNomSite($nomSite)
    {
        $this->__load();
        return parent::setNomSite($nomSite);
    }

    public function getNomSite()
    {
        $this->__load();
        return parent::getNomSite();
    }

    public function setAdministrateursId($administrateursId)
    {
        $this->__load();
        return parent::setAdministrateursId($administrateursId);
    }

    public function getAdministrateursId()
    {
        $this->__load();
        return parent::getAdministrateursId();
    }

    public function setNomAdmin($nomAdmin)
    {
        $this->__load();
        return parent::setNomAdmin($nomAdmin);
    }

    public function getNomAdmin()
    {
        $this->__load();
        return parent::getNomAdmin();
    }

    public function setEmailAdmin($emailAdmin)
    {
        $this->__load();
        return parent::setEmailAdmin($emailAdmin);
    }

    public function getEmailAdmin()
    {
        $this->__load();
        return parent::getEmailAdmin();
    }

    public function setAdresseAdmin($adresseAdmin)
    {
        $this->__load();
        return parent::setAdresseAdmin($adresseAdmin);
    }

    public function getAdresseAdmin()
    {
        $this->__load();
        return parent::getAdresseAdmin();
    }

    public function setVilleAdmin($villeAdmin)
    {
        $this->__load();
        return parent::setVilleAdmin($villeAdmin);
    }

    public function getVilleAdmin()
    {
        $this->__load();
        return parent::getVilleAdmin();
    }

    public function setCpAdmin($cpAdmin)
    {
        $this->__load();
        return parent::setCpAdmin($cpAdmin);
    }

    public function getCpAdmin()
    {
        $this->__load();
        return parent::getCpAdmin();
    }

    public function setTelAdmin($telAdmin)
    {
        $this->__load();
        return parent::setTelAdmin($telAdmin);
    }

    public function getTelAdmin()
    {
        $this->__load();
        return parent::getTelAdmin();
    }

    public function setPortAdmin($portAdmin)
    {
        $this->__load();
        return parent::setPortAdmin($portAdmin);
    }

    public function getPortAdmin()
    {
        $this->__load();
        return parent::getPortAdmin();
    }

    public function setUrlSite($urlSite)
    {
        $this->__load();
        return parent::setUrlSite($urlSite);
    }

    public function getUrlSite()
    {
        $this->__load();
        return parent::getUrlSite();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nomSite', 'administrateursId', 'nomAdmin', 'emailAdmin', 'adresseAdmin', 'villeAdmin', 'cpAdmin', 'telAdmin', 'portAdmin', 'urlSite');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}