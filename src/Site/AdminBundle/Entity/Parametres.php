<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Site\AdminBundle\Entity\Parametres
 *
 * @ORM\Table(name="parametres")
 * @ORM\Entity
 */
class Parametres
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $nomSite
     * @Assert\NotBlank(message = "Nom du site ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="nom_site", type="string", length=120, nullable=true)
     */
    private $nomSite;

    /**
     * @var string $urlSite
     * @Assert\NotBlank(message = "Url ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="url_site", type="string", length=120, nullable=true)
     */
    private $urlSite;

    /**
     * @var text $descriptionSite
     * @Assert\NotBlank(message = "Description ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="description_site", type="text", nullable=true)
     */
    private $descriptionSite;
    
    
    /**
     * @var string $immatriculation
     * @Assert\NotBlank(message = "Immatriculation ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="immatriculation", type="string", length=120, nullable=true)
     */
    private $immatriculation;

    /**
     * @var string $nomAdmin
     * @Assert\NotBlank(message = "Nom ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="nom_admin", type="string", length=120, nullable=true)
     */
    private $nomAdmin;

    /**
     * @var string $emailAdmin
     * @Assert\NotBlank(message = "Email ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="email_admin", type="string", length=120, nullable=true)
     */
    private $emailAdmin;

    /**
     * @var string $adresseAdmin
     * @Assert\NotBlank(message = "Adresse ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="adresse_admin", type="string", length=150, nullable=true)
     */
    private $adresseAdmin;

    /**
     * @var string $villeAdmin
     *
     * @ORM\Column(name="ville_admin", type="string", length=150, nullable=true)
     */
    private $villeAdmin;

    /**
     * @var string $cpAdmin
     * @Assert\MaxLength(5)
     * @ORM\Column(name="cp_admin", type="string", length=150, nullable=true)
     */
    private $cpAdmin;

    /**
     * @var string $telAdmin
     * @Assert\MaxLength(10)
     * @Assert\NotBlank(message = "Tel ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="tel_admin", type="string", length=120, nullable=true)
     */
    private $telAdmin;

    /**
     * @var string $portAdmin
     *
     * @ORM\Column(name="port_admin", type="string", length=120, nullable=true)
     */
    private $portAdmin;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSite
     *
     * @param string $nomSite
     * @return Parametres
     */
    public function setNomSite($nomSite)
    {
        $this->nomSite = $nomSite;
    
        return $this;
    }

    /**
     * Get nomSite
     *
     * @return string 
     */
    public function getNomSite()
    {
        return $this->nomSite;
    }

    /**
     * Set urlSite
     *
     * @param string $urlSite
     * @return Parametres
     */
    public function setUrlSite($urlSite)
    {
        $this->urlSite = $urlSite;
    
        return $this;
    }

    /**
     * Get urlSite
     *
     * @return string 
     */
    public function getUrlSite()
    {
        return $this->urlSite;
    }

    /**
     * Set nomAdmin
     *
     * @param string $nomAdmin
     * @return Parametres
     */
    public function setNomAdmin($nomAdmin)
    {
        $this->nomAdmin = $nomAdmin;
    
        return $this;
    }

    /**
     * Get nomAdmin
     *
     * @return string 
     */
    public function getNomAdmin()
    {
        return $this->nomAdmin;
    }

    /**
     * Set emailAdmin
     *
     * @param string $emailAdmin
     * @return Parametres
     */
    public function setEmailAdmin($emailAdmin)
    {
        $this->emailAdmin = $emailAdmin;
    
        return $this;
    }

    /**
     * Get emailAdmin
     *
     * @return string 
     */
    public function getEmailAdmin()
    {
        return $this->emailAdmin;
    }

    /**
     * Set adresseAdmin
     *
     * @param string $adresseAdmin
     * @return Parametres
     */
    public function setAdresseAdmin($adresseAdmin)
    {
        $this->adresseAdmin = $adresseAdmin;
    
        return $this;
    }

    /**
     * Get adresseAdmin
     *
     * @return string 
     */
    public function getAdresseAdmin()
    {
        return $this->adresseAdmin;
    }

    /**
     * Set villeAdmin
     *
     * @param string $villeAdmin
     * @return Parametres
     */
    public function setVilleAdmin($villeAdmin)
    {
        $this->villeAdmin = $villeAdmin;
    
        return $this;
    }

    /**
     * Get villeAdmin
     *
     * @return string 
     */
    public function getVilleAdmin()
    {
        return $this->villeAdmin;
    }

    /**
     * Set cpAdmin
     *
     * @param string $cpAdmin
     * @return Parametres
     */
    public function setCpAdmin($cpAdmin)
    {
        $this->cpAdmin = $cpAdmin;
    
        return $this;
    }

    /**
     * Get cpAdmin
     *
     * @return string 
     */
    public function getCpAdmin()
    {
        return $this->cpAdmin;
    }

    /**
     * Set telAdmin
     *
     * @param string $telAdmin
     * @return Parametres
     */
    public function setTelAdmin($telAdmin)
    {
        $this->telAdmin = $telAdmin;
    
        return $this;
    }

    /**
     * Get telAdmin
     *
     * @return string 
     */
    public function getTelAdmin()
    {
        return $this->telAdmin;
    }

    /**
     * Set portAdmin
     *
     * @param string $portAdmin
     * @return Parametres
     */
    public function setPortAdmin($portAdmin)
    {
        $this->portAdmin = $portAdmin;
    
        return $this;
    }

    /**
     * Get portAdmin
     *
     * @return string 
     */
    public function getPortAdmin()
    {
        return $this->portAdmin;
    }

    /**
     * Set descriptionSite
     *
     * @param string $descriptionSite
     * @return Parametres
     */
    public function setDescriptionSite($descriptionSite)
    {
        $this->descriptionSite = $descriptionSite;
    
        return $this;
    }

    /**
     * Get descriptionSite
     *
     * @return string 
     */
    public function getDescriptionSite()
    {
        return $this->descriptionSite;
    }

    /**
     * Set immatriculation
     *
     * @param string $immatriculation
     * @return Parametres
     */
    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    
        return $this;
    }

    /**
     * Get immatriculation
     *
     * @return string 
     */
    public function getImmatriculation()
    {
        return $this->immatriculation;
    }
}