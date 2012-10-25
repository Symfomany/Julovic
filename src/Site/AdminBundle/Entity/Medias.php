<?php

namespace Site\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\Common\Util\Debug;
use Symfony\Component\Security\Core\SecurityContextInterface;

use Site\AdminBundle\Entity\Administrateurs;
use Site\AdminBundle\Entity\Articles;

use Imagine\Gd\Imagine;
use Imagine\Image\Point;
use Imagine\Image\Box;
use Imagine\Image\ImageInterface;

use Symfony\Component\Config\Definition\NodeInterface;

/**
 * Meetserious\SiteProBundle\Entity\Medias
 * @ORM\Table(name="medias")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Site\AdminBundle\Repository\MediasRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Medias {

    /**
     * Constructor of Medias 
     */
    public function __construct() {
        $this->dateCreated = new \DateTime('now');
        $this->dateUpdated = new \DateTime('now');
        $this->offer = null;
        $this->state = 0;
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
     * @ORM\ManyToOne(targetEntity="Administrateurs", inversedBy="medias")
     * @ORM\JoinColumn(name="administrateur_id", referencedColumnName="id", nullable=true)
     */
    private $administrateur;

    /**
     * @var string $legend
     * @Assert\NotBlank(message = "Legende ne doit pas être vide", groups={"suscribe_step2"})
     * @ORM\Column(name="legend", type="string", length=120, nullable=true)
     */
    private $legend;

    /**
     * @var string $picture
     * @ORM\Column(name="picture", type="string", length=150, nullable=true)
     */
    private $picture;
    

    /**
     * @var string $description
     * @ORM\Column(name="description", type="text", length=150, nullable=true)
     */
    private $description;
    

    /**
     * @var string $extension
     * @ORM\Column(name="extension", type="string", length=150, nullable=true)
     */
    private $extension;
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Articles", inversedBy="medias")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id", nullable=true)
     */
    protected $article;


    /**
     * @Assert\File(
     *     maxSize = "7000k",
     *     mimeTypesMessage = "Please upload a valid Image"
     * )
     */
    public $file;

    /**
     * @var integer $state
     *
     * @ORM\Column(name="state", type="boolean", nullable=false)
     */
    private $state;

    /**
     * @var \DateTime $dateCreated
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=true)
     */
    private $dateCreated;

    /**
     * @var \DateTime $dateUpdated
     *
     * @ORM\Column(name="date_updated", type="datetime", nullable=true)
     */
    private $dateUpdated;

    /**
     * @var boolean $active
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /*     * ************************************************************  Uploaded **************************************************************** */

    /**
     * Get Absolute Path
     * @return type 
     */
    public function getAbsolutePath() {
        return null === $this->picture ? null : $this->getUploadRootDir() . '/' . $this->picture;
    }

    /**
     * Get Web Path
     * @return type 
     */
    public function getWebPath() {
        return null === $this->picture ? null : $this->getUploadDir() . '/' . $this->picture;
    }

    /**
     * Get Upload dir
     * @param type $location
     * @return type 
     */
    protected function getUploadRootDir($location = 'articles') {
        return __DIR__ . '/../../../../web/' . $this->getUploadDir($location);
    }

    /**
     * Get Upload Directory
     * @param type $location
     * @return type 
     */
    protected function getUploadDir($location) {
        return 'uploads/' . $location . '/' . $this->administrateur->getId();
    }

    /**
     * Get Upload Action
     * @param type $location
     * @return type 
     */
    public function upload($location = 'administrateurs') {

        
        // the file property can be empty if the field is not required
        if (null === $this->file) {
            return;
        }
        if (!is_dir($this->getUploadRootDir($location)))
            if (!@mkdir($this->getUploadRootDir($location)))
                return;
        $this->picture_name = md5(uniqid(rand(), true));
        $this->picture = $this->picture_name . '.' . $this->file->guessExtension();
        $this->extension = $this->file->guessExtension();


        $path = $this->file->move($this->getUploadRootDir($location), $this->picture);

        if($this->extension == 'jpg' || $this->extension == 'gif' || $this->extension == 'png' || $this->extension == 'jpeg'){
            
        $imagine = new \Imagine\Gd\Imagine();
        $imagine2 = clone $imagine;
        $imagine3 = clone $imagine;

        $imagine->open($this->getUploadRootDir($location) . '/' . $this->picture)
                ->thumbnail(new \Imagine\Image\Box(175, 75))
                ->save($this->getUploadRootDir($location) . '/' . $this->picture_name . '-small.' . $this->extension);

        $imagine2->open($this->getUploadRootDir($location) . '/' . $this->picture)
                ->thumbnail(new \Imagine\Image\Box(300, 150))
                ->save($this->getUploadRootDir($location) . '/' . $this->picture_name . '-medium.' . $this->extension);

        $imagine3->open($this->getUploadRootDir($location) . '/' . $this->picture)
                ->thumbnail(new \Imagine\Image\Box(500, 200))
                ->save($this->getUploadRootDir($location) . '/' . $this->picture_name . '-big.' . $this->extension);

        }
        
        $this->file = null;
    }

    /**
     * @ORM\PreUpdate()
     */
    public function updateDateUpdated() {
        $this->setDateUpdated(new \Datetime('now'));
    }

    /**
     * LifeCycle After Remove Unlink() remove on SERVER
     * @ORM\PostRemove()
     */
    public function removeUpload() {
        if ($file = $this->getAbsolutePath()) {
            $nom = substr($file, 0, -4);
            $type = substr($file, -4, 4);
            if (@file_exists($nom . $type))
                @unlink($nom . $type);
            if (@file_exists($nom . '-small' . $type))
                @unlink($nom . '-small' . $type);
            if (@file_exists($nom . '-medium' . $type))
                @unlink($nom . '-medium' . $type);
            if (@file_exists($nom . '-big' . $type))
                @unlink($nom . '-big' . $type);
        }
    }

    /*     * ************************************************************  Getters & Setters **************************************************************** */

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set legend
     *
     * @param string $legend
     * @return Medias
     */
    public function setLegend($legend) {
        $this->legend = $legend;

        return $this;
    }

    /**
     * Get legend
     *
     * @return string 
     */
    public function getLegend() {
        return $this->legend;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Medias
     */
    public function setPicture($picture) {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture() {
        return $this->picture;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Medias
     */
    public function setState($state) {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState() {
        return $this->state;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Medias
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
     * Set dateUpdated
     *
     * @param \DateTime $dateUpdated
     * @return Medias
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
     * Generate Thumbs
     * @param type $inputFileName
     * @param type $maxSize
     * @return boolean 
     */
    
    protected function createthumb($name, $filename, $new_w, $new_h, $type = 'jpg') {
        if ($type == "jpg" || $type == "jpeg") {
            $src_img = imagecreatefromjpeg($name);
        }
        if ($type == "png") {
            $src_img = imagecreatefrompng($name);
        }
        if ($type == "gif") {
            $src_img = imagecreatefromgif($name);
        }
        $old_x = imageSX($src_img);
        $old_y = imageSY($src_img);
        if ($old_x > $old_y) {
            $thumb_w = $new_w;
            $percent = ($new_w * 100) / $old_x;
            $thumb_h = ($percent * $old_y) / 100;
        }
        if ($old_x < $old_y) {
            $percent = ($new_h * 100) / $old_y;
            $thumb_w = ($percent * $old_x) / 100;
            $thumb_h = $new_h;
        }
        if ($old_x == $old_y) {
            $thumb_w = $new_w;
            $thumb_h = $new_h;
        }
        $dst_img = ImageCreateTrueColor($thumb_w, $thumb_h);
        imagecopyresampled($dst_img, $src_img, 0, 0, 0, 0, $thumb_w, $thumb_h, $old_x, $old_y);

        if ($type == "png") {
            imagepng($dst_img, $filename);
        }
        if ($type == "gif") {
            imagegif($dst_img, $filename);
        }
        if ($type == "jpg" || $type == "jpeg") {
            imagejpeg($dst_img, $filename);
        }
        imagedestroy($dst_img);
        imagedestroy($src_img);
    }

    
    

    /**
     * Set administrateur
     *
     * @param Site\AdminBundle\Entity\Administrateurs $administrateur
     * @return Medias
     */
    public function setAdministrateur(\Site\AdminBundle\Entity\Administrateurs $administrateur = null)
    {
        $this->administrateur = $administrateur;
    
        return $this;
    }

    /**
     * Get administrateur
     *
     * @return Site\AdminBundle\Entity\Administrateurs 
     */
    public function getAdministrateur()
    {
        return $this->administrateur;
    }

    /**
     * Set article
     *
     * @param Site\AdminBundle\Entity\Articles $article
     * @return Medias
     */
    public function setArticle(\Site\AdminBundle\Entity\Articles $article = null)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return Site\AdminBundle\Entity\Articles 
     */
    public function getArticle()
    {
        return $this->article;
    }
    
    public function __toString(){
        return $this->legend;
    }
    

    /**
     * Set active
     *
     * @param boolean $active
     * @return Medias
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return Medias
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
        return $this;
    }

    /**
     * Get extension
     *
     * @return string 
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Medias
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
}