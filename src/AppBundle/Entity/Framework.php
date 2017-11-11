<?php


namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Framework
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FrameworkRepository")
 * @ORM\Table(name="l2w_user")
 */
class Framework
{

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
     * @var Language
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language", inversedBy="")
     * @ORM\JoinColumn(name="language_id", onDelete="CASCADE")
     */
    private $language;
}