<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TutorialClass
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TutorialClassRepository")
 * @ORM\Table(name="l2w_tutorial_class")
 */
class TutorialClass
{

    const ALIAS = 'l2w_tutorial_class';

    /**
     * @var Tutorial
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tutorial", inversedBy="tutorialClasses")
     * @ORM\JoinColumn(name="tutorial_id", onDelete="CASCADE")
     */
    private $tutorial;

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="video_url", type="string", length=255)
     */
    private $videoUrl;

    /**
     * @var string
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var int
     * @ORM\Column(name="priority", type="integer")
     */
    private $priority;

    /**
     * @return Tutorial
     */
    public function getTutorial()
    {
        return $this->tutorial;
    }

    /**
     * @param Tutorial $tutorial
     * @return TutorialClass
     */
    public function setTutorial($tutorial)
    {
        $this->tutorial = $tutorial;
        return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TutorialClass
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getVideoUrl()
    {
        return $this->videoUrl;
    }

    /**
     * @param string $videoUrl
     * @return TutorialClass
     */
    public function setVideoUrl($videoUrl)
    {
        $this->videoUrl = $videoUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return TutorialClass
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     * @return TutorialClass
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
        return $this;
    }

}