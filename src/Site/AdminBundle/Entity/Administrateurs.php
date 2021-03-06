<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface as AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;


use Site\AdminBundle\Entity\Medias;

use  Site\AdminBundle\Repository\AdministrateursRepository;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

/**
 * Site\AdminBundle\Entity\Administrateurs
 *
 * @ORM\Table(name="administrateurs")
 * @ORM\Entity(repositoryClass="Site\AdminBundle\Repository\AdministrateursRepository")
 * @UniqueEntity(fields={"email"}, message="Votre Admin est déjà utilisé")
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Entity
 */
class Administrateurs extends EntityRepository implements AdvancedUserInterface, \Serializable {

    
    /**
     * Constructor of Entity to initialise 
     */
    public function __construct() {
        $this->createdAt = new \DateTime('now');
        $this->accountNonLocked = true;
        $this->accountNonExpired = true;
        $this->enabled = false;
        $this->token = sha1($this->getEmail() . time());
        $this->salt = md5(sprintf(
                        '%s_%d_%f', uniqid(), rand(0, 99999), microtime(true)
                ));
        $this->offers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
        $this->invoices = new \Doctrine\Common\Collections\ArrayCollection();
        $this->notification = new \Doctrine\Common\Collections\ArrayCollection();
        $this->special = 0;
        $this->warn = 0;
        $this->typeCuisine = '1';
    }
    
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $firstname
    * @Assert\NotBlank(message = "Prénom ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="firstname", type="string", length=20, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
    * @Assert\NotBlank(message = "Nom  ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="lastname", type="string", length=30, nullable=true)
     */
    private $lastname;

    /**
     * @var string $picture
     *
     * @ORM\Column(name="picture", type="string", length=40, nullable=true)
     */
    private $picture;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $email
     * @ORM\Column(name="email", type="string", length=60, nullable=false, unique=true)
     * @Assert\NotBlank(message = "Email ne doit pas être vide")
     * @Assert\Email(
     *     message = "The email '{{ value }}'n'est pas valide.",
     *     checkMX = true
     * )
     */
    private $email;

     /**
     * @var string $password
     * @Assert\NotBlank(message = "Mot de passe ne doit pas être vide", groups={"suscribe", "infos"})
     * @Assert\MinLength(
     *     limit=8,
     *     message="Votre mot de passe  doit comporter {{ limit }} charactères.",
     *     groups={"suscribe", "infos"}
     * )
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var boolean $optin
     *
     * @ORM\Column(name="optin", type="boolean", nullable=true)
     */
    private $optin;

    /**
     * @var string $ip
     *
     * @ORM\Column(name="ip", type="string", length=15, nullable=true)
     */
    private $ip;

    /**
     * @var string $salt
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @var string $token
     *
     * @ORM\Column(name="token", type="string", length=50, nullable=true)
     */
    private $token;

  /**
     * @var datetime $dateUpdated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="updated_at", type="datetime", length=200, nullable=false)
     */
    private $updatedAt;

    /**
     * @var string $dateCreated
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="created_at", type="datetime", length=200, nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime $dateAuth
     *
     * @ORM\Column(name="date_auth", type="datetime", nullable=true)
     */
    private $dateAuth;

    /**
     * @var boolean $enabled
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    private $enabled;

    /**
     * @var boolean $dob
     *
     * @ORM\Column(name="dob", type="date", nullable=false)
     */
    private $dob;
    
    
    /**
     * @var string $tel
     * @ORM\Column(name="tel", type="string", nullable=true)
     * @Assert\NotBlank(message = "Telephone ne doit pas être vide", groups={"coordonnees", "suscribe"})
     * @Assert\Regex(pattern="/^0[1-68]([-. ]?[0-9]{2}){4}$/", message="Le tel est invalide",  groups={"coordonnees", "suscribe"})
     */
    protected $tel;
    
    
    /**
     * @var string $adresse
     * @ORM\Column(name="adresse", type="text",  nullable=false)
     * @Assert\NotBlank(groups={"infos","suscribe"}, message = "Adresse n'est pas vide")
     * @Assert\MinLength(
     *     limit=5,
     *     message="Votre adresse doit comporter {{ limit }} charactères.", 
     *     groups={"infos","suscribe"}
     * )
     */
    protected $adresse;

    /**
     * @var string $ville
     * @ORM\Column(name="ville", type="string", nullable=false,length=200)
     * @Assert\NotBlank(groups={"infos", "suscribe"}, message="Ville vide")
     * @Assert\MinLength(
     *     limit=3,
     *     message="Votre ville doit comporter {{ limit }} charactères.",
     *     groups={"infos", "suscribe"}
     * )
     */
    protected $ville;

    /**
     * @var string $zipcode
     * @ORM\Column(name="zipcode", type="string", nullable=false,length=200)
     * @Assert\NotBlank(groups={"infos", "suscribe"}, message="Zipcode  vide")
     * @Assert\Regex(pattern="/^[0-9]{5}$/", message="Cp est invalide",  groups={"infos", "suscribe"})
     */
    protected $zipcode;
    
    
    /**
     * @ORM\OneToMany(targetEntity="Medias", mappedBy="administrateur", cascade={"all"},orphanRemoval=true)
     */
    protected $medias;
    

    /**
     * @var boolean $accountnonlocked
     *
     * @ORM\Column(name="accountNonLocked", type="boolean", nullable=false)
     */
    private $accountNonLocked;
    
    /**
     * @var boolean $accountnonexpired
     *
     * @ORM\Column(name="accountNonExpired", type="boolean", nullable=false)
     */
    private $accountNonExpired;

     /**
     * @Gedmo\Slug(fields={"lastname"})
     * @ORM\Column( length=128, unique=true)
     */
    private $slug;


    
    
    

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
     * Set firstname
     *
     * @param string $firstname
     * @return Administrateurs
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return Administrateurs
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    
        return $this;
    }

    /**
     * Get lastname
     *
     * @return string 
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Administrateurs
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
    
        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Administrateurs
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }


    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set optin
     *
     * @param boolean $optin
     * @return Administrateurs
     */
    public function setOptin($optin)
    {
        $this->optin = $optin;
    
        return $this;
    }

    /**
     * Get optin
     *
     * @return boolean 
     */
    public function getOptin()
    {
        return $this->optin;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return Administrateurs
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Administrateurs
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return Administrateurs
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Administrateurs
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Administrateurs
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set dateAuth
     *
     * @param \DateTime $dateAuth
     * @return Administrateurs
     */
    public function setDateAuth($dateAuth)
    {
        $this->dateAuth = $dateAuth;
    
        return $this;
    }

    /**
     * Get dateAuth
     *
     * @return \DateTime 
     */
    public function getDateAuth()
    {
        return $this->dateAuth;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return Administrateurs
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }


    /**
     * Set slug
     *
     * @param string $slug
     * @return Administrateurs
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

   
    /**
     * Get All Roles 
     */
    public function eraseCredentials() {
        $this->roles = null;
    }

    /**
     * Gets an array of roles.
     * @return Roles
     */
    public function getRoles() {
        return array('ROLE_ADMIN');
    }
  /**
     * get Username
     * @return type 
     */
    public function getUsername() {
        return $this->email;
    }

    /**
     * Account is non expired
     * {@inheritdoc}
     */
    public function isAccountNonExpired() {
        return $this->accountNonExpired;
    }
    

    /**
     * Account is non locked
     * {@inheritdoc}
     */
    public function isAccountNonLocked() {
        return $this->accountNonLocked;
    }

    /**
     * Account has credentials
     * {@inheritdoc}
     */
    public function isCredentialsNonExpired() {
        if (is_null($this->password) || !$this->password || strlen($this->password) < 1) {
            return false;
        }
        return true;
    }

    /**
     * Account Is Enabled
     * {@inheritdoc}
     */
    public function isEnabled() {
        return $this->enabled;
    }

    /**
     * Serialize object restaurant in object
     */
    public function serialize() {
        return serialize(array(
                    $this->id,
                    $this->password,
                    $this->email
                ));
    }

    /**
     * Unserialize object restaurant
     */
    public function unserialize($serialized) {
        list(
                $this->id,
                $this->password,
                $this->email
                ) = unserialize($serialized);
    }

    /**
     * Set dob
     *
     * @param \DateTime $dob
     * @return Administrateurs
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }


    /**
     * Set tel
     *
     * @param string $tel
     * @return Administrateurs
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Administrateurs
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    
        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Administrateurs
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     * @return Administrateurs
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    
        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set accountNonLocked
     *
     * @param boolean $accountNonLocked
     * @return Administrateurs
     */
    public function setAccountNonLocked($accountNonLocked)
    {
        $this->accountNonLocked = $accountNonLocked;
    
        return $this;
    }

    /**
     * Get accountNonLocked
     *
     * @return boolean 
     */
    public function getAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    /**
     * Set accountNonExpired
     *
     * @param boolean $accountNonExpired
     * @return Administrateurs
     */
    public function setAccountNonExpired($accountNonExpired)
    {
        $this->accountNonExpired = $accountNonExpired;
    
        return $this;
    }

    /**
     * Get accountNonExpired
     *
     * @return boolean 
     */
    public function getAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    /**
     * Add medias
     *
     * @param Site\AdminBundle\Entity\Medias $medias
     * @return Administrateurs
     */
    public function addMedia(\Site\AdminBundle\Entity\Medias $medias)
    {
        $this->medias[] = $medias;
    
        return $this;
    }

    /**
     * Remove medias
     *
     * @param Site\AdminBundle\Entity\Medias $medias
     */
    public function removeMedia(\Site\AdminBundle\Entity\Medias $medias)
    {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMedias()
    {
        return $this->medias;
    }
    

    public  function __toString(){
          return $this->lastname.$this->firstname;
    }
}