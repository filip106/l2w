<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Tutorial
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TutorialRepository")
 * @ORM\Table(name="l2w_tutorial")
 */
class Tutorial
{

    const ALIAS = 'l2w_tutorial';
    const TABLE_NAME = 'l2w_tutorial';

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
     * @ORM\Column(name="tutorial_quote", type="string", length=255)
     */
    private $tutorialQuote;

    /**
     * @var string
     * @ORM\Column(name="short_description", type="string", length=255)
     */
    private $shortDescription;

    /**
     * @var int
     * @ORM\Column(name="total_hours", type="integer", options={"default": 0})
     */
    private $totalHours;

    /**
     * @var int
     * @ORM\Column(name="number_of_classes", type="integer", options={"default": 0})
     */
    private $numberOfClasses;

    /**
     * @var string
     * @ORM\Column(name="base_image_url", type="string", length=255)
     */
    private $baseImageUrl;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\TutorialClass", mappedBy="tutorial")
     */
    private $tutorialClasses;

    /**
     * @var Framework
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Framework", inversedBy="tutorials")
     * @ORM\JoinColumn(name="framework_id")
     */
    private $framework;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Tutorial
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
     * @return Tutorial
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * @param string $shortDescription
     * @return Tutorial
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotalHours()
    {
        return $this->totalHours;
    }

    /**
     * @param int $totalHours
     * @return Tutorial
     */
    public function setTotalHours($totalHours)
    {
        $this->totalHours = $totalHours;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfClasses()
    {
        return $this->numberOfClasses;
    }

    /**
     * @param int $numberOfClasses
     * @return Tutorial
     */
    public function setNumberOfClasses($numberOfClasses)
    {
        $this->numberOfClasses = $numberOfClasses;
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
     * @return Tutorial
     */
    public function setBaseImageUrl($baseImageUrl)
    {
        $this->baseImageUrl = $baseImageUrl;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getTutorialClasses()
    {
        return $this->tutorialClasses;
    }

    /**
     * @param ArrayCollection $tutorialClasses
     * @return Tutorial
     */
    public function setTutorialClasses($tutorialClasses)
    {
        $this->tutorialClasses = $tutorialClasses;
        return $this;
    }

    /**
     * @return Framework
     */
    public function getFramework()
    {
        return $this->framework;
    }

    /**
     * @param Framework $framework
     * @return Tutorial
     */
    public function setFramework($framework)
    {
        $this->framework = $framework;
        return $this;
    }

    /**
     * @return string
     */
    public function getTutorialQuote()
    {
        return $this->tutorialQuote;
    }

    /**
     * @param string $tutorialQuote
     * @return Tutorial
     */
    public function setTutorialQuote($tutorialQuote)
    {
        $this->tutorialQuote = $tutorialQuote;
        return $this;
    }


}