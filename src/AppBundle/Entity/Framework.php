<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Framework
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FrameworkRepository")
 * @ORM\Table(name="l2w_framework")
 */
class Framework
{

    const ALIAS = 'l2w_framework';

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
     * @ORM\Column(name="base_image_url", type="string", length=255)
     */
    private $baseImageUrl;

    /**
     * @var ArrayCollection
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"remove"})
     * @ORM\JoinColumn(name="base_image_id")
     */
    private $baseImage;

    /**
     * @var Language
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language", inversedBy="frameworks")
     * @ORM\JoinColumn(name="language_id", onDelete="CASCADE")
     */
    private $language;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Tutorial", mappedBy="framework")
     */
    private $tutorials;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Framework
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
     * @return Framework
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return Framework
     */
    public function setBaseImageUrl($baseImageUrl)
    {
        $this->baseImageUrl = $baseImageUrl;

        return $this;
    }

    /**
     * @return Language
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param Language $language
     * @return Framework
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

}