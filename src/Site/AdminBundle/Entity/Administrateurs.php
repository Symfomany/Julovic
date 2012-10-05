<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface as UserInterface;
use Symfony\Component\Security\Core\User\AdvancedUserInterface as AdvancedUserInterface;
use Doctrine\Common\Collections\ArrayCollection;

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
     *
     * @ORM\Column(name="firstname", type="string", length=20, nullable=true)
     */
    private $firstname;

    /**
     * @var string $lastname
     *
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
     * @Assert\NotBlank(message = "Mot de passe ne doit pas être vide")
     * @Assert\MinLength(
     *     limit=8,
     *     message="Votre mot de passe  doit comporter {{ limit }} charactères."
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
     * @var \DateTime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var \DateTime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
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
     * @var string $slug
     *
     * @ORM\Column(name="slug", type="string", length=255, nullable=false)
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
     * Set accountnonlocked
     *
     * @param boolean $accountnonlocked
     * @return Administrateurs
     */
    public function setAccountnonlocked($accountnonlocked)
    {
        $this->accountnonlocked = $accountnonlocked;
    
        return $this;
    }

    /**
     * Get accountnonlocked
     *
     * @return boolean 
     */
    public function getAccountnonlocked()
    {
        return $this->accountnonlocked;
    }

    /**
     * Set accountnonexpired
     *
     * @param boolean $accountnonexpired
     * @return Administrateurs
     */
    public function setAccountnonexpired($accountnonexpired)
    {
        $this->accountnonexpired = $accountnonexpired;
    
        return $this;
    }

    /**
     * Get accountnonexpired
     *
     * @return boolean 
     */
    public function getAccountnonexpired()
    {
        return $this->accountnonexpired;
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
}