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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Framework", mappedBy="language", cascade={"persist"})
     */
    private $frameworks;
}