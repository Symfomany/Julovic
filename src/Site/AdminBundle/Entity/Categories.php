<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Table(name="categories")
 * @ORM\Entity(repositoryClass="Gedmo\Tree\Entity\Repository\NestedTreeRepository")
 * @Gedmo\Tree(type="nested")
 */
class Categories {

    /**
     * Constructor
     */
    public function __construct() {
        $this->articles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->dateCreated = new \Datetime('now');
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string $title
     * @Assert\NotBlank(message = "Titre ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="title", type="string", length=200, nullable=false)
     */
    protected $title;

    /**
     * @var string $description
     * @Assert\NotBlank(message = "Description  ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    protected $description;

    /**
     * @var \DateTime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $dateCreated;

    /**
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column( length=128, unique=true)
     */
    protected $slug;

    /**
     * @Gedmo\TreeLeft
     * @ORM\Column(name="lft", type="integer")
     */
    protected $lft;

    /**
     * @Gedmo\TreeLevel
     * @ORM\Column(name="lvl", type="integer")
     */
    protected $lvl;

    /**
     * @Gedmo\TreeRight
     * @ORM\Column(name="rgt", type="integer")
     */
    protected $rgt;

    /**
     * @Gedmo\TreeRoot
     * @ORM\Column(name="root", type="integer", nullable=true)
     */
    protected $root;

    /**
     * @var \String $position
     * 
     * @ORM\Column(name="position", type="integer", nullable=true)
     */
    protected $position;

    /**
     * @Gedmo\TreeParent
     * @ORM\ManyToOne(targetEntity="Site\AdminBundle\Entity\Categories", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $parent;

    /**
     * @ORM\OneToMany(targetEntity="Site\AdminBundle\Entity\Categories", mappedBy="parent")
     * @ORM\OrderBy({"lft" = "ASC"})
     */
    protected $children;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Categories
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
     * Set description
     *
     * @param string $description
     * @return Categories
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Categories
     */
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->dateCreated;
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
     * Set lft
     *
     * @param integer $lft
     * @return Categories
     */
    public function setLft($lft) {
        $this->lft = $lft;

        return $this;
    }

    /**
     * Get lft
     *
     * @return integer 
     */
    public function getLft() {
        return $this->lft;
    }

    /**
     * Set lvl
     *
     * @param integer $lvl
     * @return Categories
     */
    public function setLvl($lvl) {
        $this->lvl = $lvl;

        return $this;
    }

    /**
     * Get lvl
     *
     * @return integer 
     */
    public function getLvl() {
        return $this->lvl;
    }

    /**
     * Set rgt
     *
     * @param integer $rgt
     * @return Categories
     */
    public function setRgt($rgt) {
        $this->rgt = $rgt;

        return $this;
    }

    /**
     * Get rgt
     *
     * @return integer 
     */
    public function getRgt() {
        return $this->rgt;
    }

    /**
     * Set root
     *
     * @param integer $root
     * @return Categories
     */
    public function setRoot($root) {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return integer 
     */
    public function getRoot() {
        return $this->root;
    }

    /**
     * Set parent
     *
     * @param Site\AdminBundle\Entity\Categories $parent
     * @return Categories
     */
    public function setParent($parent = null) {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Get parent
     *
     * @return Site\AdminBundle\Entity\Categories
     */
    public function getParent() {
        return $this->parent;
    }

    public function getOptionLabel() {
        return str_repeat(
                        html_entity_decode('&nbsp;', ENT_QUOTES, 'UTF-8'), ($this->getLvl() + 1) * 3
                ) . $this->getTitle();
    }

    public function __toString() {
        return $this->title;
    }

    public function getLaveledTitle() {
        return (string) $this;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Categories
     */
    public function setPosition($position) {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Add children
     *
     * @param Site\AdminBundle\Entity\Categories $children
     * @return Categories
     */
    public function addChildren(\Site\AdminBundle\Entity\Categories $children) {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param Site\AdminBundle\Entity\Categories $children
     */
    public function removeChildren(\Site\AdminBundle\Entity\Categories $children) {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getChildren() {
        return $this->children;
    }

    public function getIndentedTitle() {
        return str_repeat(" - - ", $this->lvl) . $this->title;
    }

}