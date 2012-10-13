<?php

namespace Proxies\__CG__\Site\AdminBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Administrateurs extends \Site\AdminBundle\Entity\Administrateurs implements \Doctrine\ORM\Proxy\Proxy
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

    public function setFirstname($firstname)
    {
        $this->__load();
        return parent::setFirstname($firstname);
    }

    public function getFirstname()
    {
        $this->__load();
        return parent::getFirstname();
    }

    public function setLastname($lastname)
    {
        $this->__load();
        return parent::setLastname($lastname);
    }

    public function getLastname()
    {
        $this->__load();
        return parent::getLastname();
    }

    public function setPicture($picture)
    {
        $this->__load();
        return parent::setPicture($picture);
    }

    public function getPicture()
    {
        $this->__load();
        return parent::getPicture();
    }

    public function setDescription($description)
    {
        $this->__load();
        return parent::setDescription($description);
    }

    public function getDescription()
    {
        $this->__load();
        return parent::getDescription();
    }

    public function setEmail($email)
    {
        $this->__load();
        return parent::setEmail($email);
    }

    public function getEmail()
    {
        $this->__load();
        return parent::getEmail();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
    }

    public function setOptin($optin)
    {
        $this->__load();
        return parent::setOptin($optin);
    }

    public function getOptin()
    {
        $this->__load();
        return parent::getOptin();
    }

    public function setIp($ip)
    {
        $this->__load();
        return parent::setIp($ip);
    }

    public function getIp()
    {
        $this->__load();
        return parent::getIp();
    }

    public function setSalt($salt)
    {
        $this->__load();
        return parent::setSalt($salt);
    }

    public function getSalt()
    {
        $this->__load();
        return parent::getSalt();
    }

    public function setToken($token)
    {
        $this->__load();
        return parent::setToken($token);
    }

    public function getToken()
    {
        $this->__load();
        return parent::getToken();
    }

    public function setUpdatedAt($updatedAt)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setCreatedAt($createdAt)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setDateAuth($dateAuth)
    {
        $this->__load();
        return parent::setDateAuth($dateAuth);
    }

    public function getDateAuth()
    {
        $this->__load();
        return parent::getDateAuth();
    }

    public function setEnabled($enabled)
    {
        $this->__load();
        return parent::setEnabled($enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function eraseCredentials()
    {
        $this->__load();
        return parent::eraseCredentials();
    }

    public function getRoles()
    {
        $this->__load();
        return parent::getRoles();
    }

    public function getUsername()
    {
        $this->__load();
        return parent::getUsername();
    }

    public function isAccountNonExpired()
    {
        $this->__load();
        return parent::isAccountNonExpired();
    }

    public function isAccountNonLocked()
    {
        $this->__load();
        return parent::isAccountNonLocked();
    }

    public function isCredentialsNonExpired()
    {
        $this->__load();
        return parent::isCredentialsNonExpired();
    }

    public function isEnabled()
    {
        $this->__load();
        return parent::isEnabled();
    }

    public function serialize()
    {
        $this->__load();
        return parent::serialize();
    }

    public function unserialize($serialized)
    {
        $this->__load();
        return parent::unserialize($serialized);
    }

    public function setDob($dob)
    {
        $this->__load();
        return parent::setDob($dob);
    }

    public function getDob()
    {
        $this->__load();
        return parent::getDob();
    }

    public function setTel($tel)
    {
        $this->__load();
        return parent::setTel($tel);
    }

    public function getTel()
    {
        $this->__load();
        return parent::getTel();
    }

    public function setAdresse($adresse)
    {
        $this->__load();
        return parent::setAdresse($adresse);
    }

    public function getAdresse()
    {
        $this->__load();
        return parent::getAdresse();
    }

    public function setVille($ville)
    {
        $this->__load();
        return parent::setVille($ville);
    }

    public function getVille()
    {
        $this->__load();
        return parent::getVille();
    }

    public function setZipcode($zipcode)
    {
        $this->__load();
        return parent::setZipcode($zipcode);
    }

    public function getZipcode()
    {
        $this->__load();
        return parent::getZipcode();
    }

    public function setAccountNonLocked($accountNonLocked)
    {
        $this->__load();
        return parent::setAccountNonLocked($accountNonLocked);
    }

    public function getAccountNonLocked()
    {
        $this->__load();
        return parent::getAccountNonLocked();
    }

    public function setAccountNonExpired($accountNonExpired)
    {
        $this->__load();
        return parent::setAccountNonExpired($accountNonExpired);
    }

    public function getAccountNonExpired()
    {
        $this->__load();
        return parent::getAccountNonExpired();
    }

    public function createQueryBuilder($alias)
    {
        $this->__load();
        return parent::createQueryBuilder($alias);
    }

    public function createNamedQuery($queryName)
    {
        $this->__load();
        return parent::createNamedQuery($queryName);
    }

    public function createNativeNamedQuery($queryName)
    {
        $this->__load();
        return parent::createNativeNamedQuery($queryName);
    }

    public function clear()
    {
        $this->__load();
        return parent::clear();
    }

    public function find($id, $lockMode = 0, $lockVersion = NULL)
    {
        $this->__load();
        return parent::find($id, $lockMode, $lockVersion);
    }

    public function findAll()
    {
        $this->__load();
        return parent::findAll();
    }

    public function findBy(array $criteria, array $orderBy = NULL, $limit = NULL, $offset = NULL)
    {
        $this->__load();
        return parent::findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy(array $criteria)
    {
        $this->__load();
        return parent::findOneBy($criteria);
    }

    public function __call($method, $arguments)
    {
        $this->__load();
        return parent::__call($method, $arguments);
    }

    public function getClassName()
    {
        $this->__load();
        return parent::getClassName();
    }

    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->__load();
        return parent::matching($criteria);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'firstname', 'lastname', 'picture', 'description', 'email', 'password', 'optin', 'ip', 'salt', 'token', 'updatedAt', 'createdAt', 'dateAuth', 'enabled', 'dob', 'tel', 'adresse', 'ville', 'zipcode', 'accountNonLocked', 'accountNonExpired', 'slug');
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