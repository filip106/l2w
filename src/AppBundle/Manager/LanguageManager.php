<?php


namespace AppBundle\Manager;

use AppBundle\Repository\LanguageRepository;

/**
 * Class LanguageManager
 * @package AppBundle\Manager
 */
class LanguageManager
{

    /**
     * @var LanguageRepository
     */
    private $repository;

    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function getAllLanguagesWithFrameworks()
    {
        return $this->repository->getAllLanguagesWithFrameworks();
    }
}