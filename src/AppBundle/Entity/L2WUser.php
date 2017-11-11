<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class L2WUser
 * @package AppBundle\Entity
 * @ORM\Entity
 * @ORM\Table(name="l2w_user")
 */
class L2WUser
{

    /**
     * @var int
     * @ORM\Column(name="number_of_posts", type="integer", options={"default" : 0})
     */
    private $numberOfPosts;

    /**
     * @return int
     */
    public function getNumberOfPosts()
    {
        return $this->numberOfPosts;
    }

    /**
     * @param int $numberOfPosts
     * @return L2WUser
     */
    public function setNumberOfPosts($numberOfPosts)
    {
        $this->numberOfPosts = $numberOfPosts;

        return $this;
    }



}