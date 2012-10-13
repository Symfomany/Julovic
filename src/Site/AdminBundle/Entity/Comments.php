<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Site\AdminBundle\Entity\Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity
 */
class Comments
{
    public function __construct(){
        $this->dateCreated = new \Datetime('now');
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
     * @var string $email
     * @Assert\NotBlank(message = "E-mail ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="email", type="string", length=200, nullable=false)
     */
    private $email;

    /**
     * @var string $content
     * @Assert\NotBlank(message = "Contenu ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var \DateTime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;



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
     * Set email
     *
     * @param string $email
     * @return Comments
     */
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

    /**
     * Set content
     *
     * @param string $content
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Comments
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;
    
        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }
}