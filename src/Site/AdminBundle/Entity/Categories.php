<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Site\AdminBundle\Entity\Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    
        /**
     * Constructor
     */
    public function __construct()
    {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreated = new  \Datetime('now');
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
     * @var string $title
     * @Assert\NotBlank(message = "Titre ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    private $title;

    /**
     * @var string $description
     * @Assert\NotBlank(message = "Description  ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var \DateTime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    private $dateCreated;


    /**
     * @ORM\OneToMany(targetEntity="Articles", mappedBy="category", cascade={"persist", "remove"},orphanRemoval=true)
     */
    protected $articles;
        
     /**
     * @Gedmo\Slug(fields={"title"})
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
     * Set title
     *
     * @param string $title
     * @return Categories
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
     * Set description
     *
     * @param string $description
     * @return Categories
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

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Categories
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
     * Add articles
     *
     * @param Site\AdminBundle\Entity\Articles $articles
     * @return Categories
     */
    public function addArticle(\Site\AdminBundle\Entity\Articles $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param Site\AdminBundle\Entity\Articles $articles
     */
    public function removeArticle(\Site\AdminBundle\Entity\Articles $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }
    
       /**
     * Set slug
     *
     * @param string $slug
     * @return Articles
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
    
        
    public function __toString(){
        return $this->getSlug();
        
    }

}