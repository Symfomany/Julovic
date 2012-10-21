<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Site\AdminBundle\Entity\Referencement
 * @ORM\Table(name="referencement")
 * @ORM\Entity
 */
class Referencement {

    public function __construct() {
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
     * @var string $routing
     * @Assert\NotBlank(message = "Routing ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="routing", type="string", length=250, nullable=false)
     */
    private $routing;

    /**
     * @var string $title
     * @Assert\NotBlank(message = "Titre ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="title", type="string", length=250, nullable=false)
     */
    private $title;

    /**
     * @var string $link
     * @Assert\NotBlank(message = "Les motfs-Clefs ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="keywords", type="string", length=250, nullable=false)
     */
    private $keywords;

    /**
     * @var string $description
     * @Assert\NotBlank(message = "Description ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string dateCreated
     * @Assert\NotBlank(message = "Date de Création  ne doit pas être vide")
     * @ORM\Column(name="dateCreated", type="datetime", nullable=false)
     */
    private $dateCreated;

    
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
     * @return Links
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
     * @return Links
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
     * @param integer $dateCreated
     * @return Links
     */
    public function setDateCreated($dateCreated) {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return integer 
     */
    public function getDateCreated() {
        return $this->dateCreated;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     * @return Referencement
     */
    public function setKeywords($keywords) {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string 
     */
    public function getKeywords() {
        return $this->keywords;
    }

    /**
     * Set routing
     *
     * @param string $routing
     * @return Referencement
     */
    public function setRouting($routing) {
        $this->routing = $routing;

        return $this;
    }

    /**
     * Get routing
     *
     * @return string 
     */
    public function getRouting() {
        return $this->routing;
    }

}