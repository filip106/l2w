<?php

namespace AppBundle\Manager;

use AppBundle\Repository\TutorialRepository;

/**
 * Class TutorialManager
 * @package AppBundle\Manager
 */
class TutorialManager
{
    /**
     * @var TutorialRepository
     */
    private $tutorialRepository;

    /**
     * TutorialManager constructor.
     * @param TutorialRepository $tutorialRepository
     */
    public function __construct(TutorialRepository $tutorialRepository)
    {
        $this->tutorialRepository = $tutorialRepository;
    }

    /**
     * @return array
     */
    public function getFeaturedTutorials()
    {
        return $this->tutorialRepository->getFeaturedTutorials();
    }
}