<?php

namespace AppBundle\Manager;

use AppBundle\Repository\UserRepository;

/**
 * Class UserManager
 * @package AppBundle\Manager
 */
class UserManager
{

    /**
     * @var UserRepository
     */
    private $repository;

    /**
     * UserManager constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function getFeaturedUsers()
    {
        return $this->repository->getFeaturedUsers();
    }
}