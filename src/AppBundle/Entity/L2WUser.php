<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User;

/**
 * Class L2WUser
 * @package AppBundle\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="l2w_user")
 */
class L2WUser extends User
{

    const ALIAS = 'l2w_user';

    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     * @ORM\Column(name="number_of_posts", type="integer", options={"default" : 0})
     */
    private $numberOfPosts;

    /**
     * L2WUser constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->numberOfPosts = 0;
    }

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