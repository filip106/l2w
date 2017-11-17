<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Language
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LanguageRepository")
 * @ORM\Table(name="l2w_language")
 */
class Language
{

    const ALIAS = 'l2w_language';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(name="base_image_url", type="string", length=255)
     */
    private $baseImageUrl;

    /**
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"remove"})
     * @ORM\JoinColumn(name="base_image_id")
     */
    private $baseImage;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Framework", mappedBy="language", cascade={"persist"})
     */
    private $frameworks;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Language
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Language
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Language
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getBaseImageUrl()
    {
        return $this->baseImageUrl;
    }

    /**
     * @param string $baseImageUrl
     * @return Language
     */
    public function setBaseImageUrl($baseImageUrl)
    {
        $this->baseImageUrl = $baseImageUrl;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getFrameworks()
    {
        return $this->frameworks;
    }

    /**
     * @param ArrayCollection $frameworks
     * @return Language
     */
    public function setFrameworks($frameworks)
    {
        $this->frameworks = $frameworks;
        return $this;
    }

    /**
     * @return Image
     */
    public function getBaseImage()
    {
        return $this->baseImage;
    }

    /**
     * @param Image $baseImage
     * @return Language
     */
    public function setBaseImage($baseImage)
    {
        $this->baseImage = $baseImage;
        return $this;
    }



}