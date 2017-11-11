<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TutorialClass
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TutorialClassRepository")
 * @ORM\Table(name="l2w_user")
 */
class TutorialClass
{

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
     * @var Tutorial
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Tutorial", inversedBy="tutorialClasses")
     * @ORM\JoinColumn(name="tutorial_id", onDelete="CASCADE")
     */
    private $tutorial;

}