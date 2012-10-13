<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Site\AdminBundle\Entity\Pages
 *
 * @ORM\Table(name="pages")
 * @ORM\Entity
 */
class Pages
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
     * @var string $title
     * @Assert\NotBlank(message = "Titre ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var string $resume
     * @Assert\NotBlank(message = "Résumé ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="resume", type="text", nullable=false)
     */
    private $resume;

    /**
     * @var string $content
     * @Assert\NotBlank(message = "Contenu ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="content", type="text", nullable=false)
     */
    private $content;

    /**
     * @var string $tag
     * @Assert\NotBlank(message = "Tag ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="tag", type="string", length=300, nullable=false)
     */
    private $tag;

    /**
     * @var \DateTime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;

    /**
     * @var \DateTime $dateUpdated
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=false)
     */
    private $dateUpdated;



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
     * Set title
     *
     * @param string $title
     * @return Pages
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set resume
     *
     * @param string $resume
     * @return Pages
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    
        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Pages
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
     * Set tag
     *
     * @param string $tag
     * @return Pages
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    
        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Pages
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

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Pages
     */
    public function setDateUpdated($dateUpdated)
    {
        $this->dateUpdated = $dateUpdated;
    
        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated()
    {
        return $this->dateUpdated;
    }
}