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
    /**
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

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

}