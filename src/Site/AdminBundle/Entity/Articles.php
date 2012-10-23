<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Site\AdminBundle\Entity\Medias;
use Site\AdminBundle\Entity\Categories;

/**
 * Site\AdminBundle\Entity\Articles
 *
 * @ORM\Table(name="articles")
 * @ORM\Entity
 */
class Articles {

    public function __construct() {
        $this->dateCreated = new \Datetime('now');
        $this->dateUpdated = new \Datetime('now');
        $this->medias = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @var string $title;
     * @Assert\NotBlank(message = "Titre ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="title", type="string", length=200, nullable=false, unique=true)
     */
    private $title;

    /**
     * @var string $resume
     * @Assert\NotBlank(message = "Résumé  ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="resume", type="text", length=60, nullable=false, unique=true)
     * @Assert\NotBlank(message = "Résumé ne doit pas être vide")
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
     * @ORM\Column(name="tag", type="string", length=400, nullable=false)
     */
    private $tag;

    /**
     * @var string $dateCreated
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="date_created", type="datetime", length=200, nullable=false)
     */
    private $dateCreated;

    /**
     * @var datetime $dateUpdated
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(name="date_updated", type="datetime", length=200, nullable=false)
     */
    private $dateUpdated;

    /**
     * @var string $active
     *
     * @ORM\Column(name="active", type="boolean", length=200, nullable=false)
     */
    private $active;

    /**
     * @var string $type
     * @Assert\NotBlank(message = "Type ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="type", type="string", length=200, nullable=false)
     */
    private $type;

    /**
     * @var string $special
     * @Assert\NotBlank(message = "Spécial ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="special", type="boolean", length=200, nullable=false)
     */
    private $special;

    /**
     * @var string $notes
     * @Assert\NotBlank(message = "Notes ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="notes", type="string", length=200, nullable=false)
     */
    private $notes;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column( length=128, unique=true)
     */
    private $slug;

    /**
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="Categories", cascade={"persist", "remove"})
     */
    protected $categories;

    /**
     * Severals Medias
     * @ORM\OneToMany(targetEntity="Medias", mappedBy="article", cascade={"all"},orphanRemoval=true)
     * @ORM\OrderBy({"state" = "DESC"})
     */
    protected $medias;
    
    
    
    /**
     * @var \String $position
     * 
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    protected $position;
    

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set resume
     *
     * @param string $resume
     * @return Articles
     */
    public function setResume($resume) {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string 
     */
    public function getResume() {
        return $this->resume;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Articles
     */
    public function setContent($content) {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set tag
     *
     * @param string $tag
     * @return Articles
     */
    public function setTag($tag) {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return string 
     */
    public function getTag() {
        return $this->tag;
    }

    /**
     * Set dateCreated
     *
     * @param string $dateCreated
     * @return Articles
     */
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return string 
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Articles
     */
    public function setActive($active) {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive() {
        return $this->active;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Articles
     */
    public function setType($type) {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set special
     *
     * @param boolean $special
     * @return Articles
     */
    public function setSpecial($special) {
        $this->special = $special;

        return $this;
    }

    /**
     * Get special
     *
     * @return boolean 
     */
    public function getSpecial() {
        return $this->special;
    }

    /**
     * Set notes
     *
     * @param integer $notes
     * @return Articles
     */
    public function setNotes($notes) {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes
     *
     * @return integer 
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Articles
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Articles
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

    /**
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Articles
     */
    public function setDateUpdated($dateUpdated) {
        $this->dateUpdated = $dateUpdated;

        return $this;
    }

    /**
     * Get dateUpdated
     *
     * @return \DateTime 
     */
    public function getDateUpdated() {
        return $this->dateUpdated;
    }

    /**
     * Set imageName
     *
     * @param string $imageName
     * @return Articles
     */
    public function setImageName($imageName) {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName() {
        return $this->imageName;
    }

    /**
     * Add medias
     *
     * @param Site\AdminBundle\Entity\Medias $medias
     * @return Articles
     */
    public function addMedia(\Site\AdminBundle\Entity\Medias $medias) {
        $this->medias[] = $medias;

        return $this;
    }

    /**
     * Remove medias
     *
     * @param Site\AdminBundle\Entity\Medias $medias
     */
    public function removeMedia(\Site\AdminBundle\Entity\Medias $medias) {
        $this->medias->removeElement($medias);
    }

    /**
     * Get medias
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getMedias() {
        return $this->medias;
    }

    public function __toString() {
        return $this->title;
    }


    /**
     * Add categories
     *
     * @param Site\AdminBundle\Entity\Categories $categories
     * @return Articles
     */
    public function addCategorie(\Site\AdminBundle\Entity\Categories $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    public function setCategories(\Doctrine\Common\Collections\ArrayCollection $categories)
    {
        foreach($categories as $category){
            if(!empty($this->categorie))
            $this->categories->removeElement($category);
             $this->categories[] = $category;
        }
    }

    
    /**
     * Remove categories
     *
     * @param Site\AdminBundle\Entity\Categories $categories
     */
    public function removeCategorie(\Site\AdminBundle\Entity\Categories $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Articles
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }
}