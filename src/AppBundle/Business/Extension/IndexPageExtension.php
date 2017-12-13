<?php

namespace AppBundle\Business\Extension;

use AppBundle\Manager\LanguageManager;
use AppBundle\Manager\TutorialManager;
use AppBundle\Manager\UserManager;

/**
 * Class IndexPageExtension
 * @package AppBundle\Business\Extension
 */
class IndexPageExtension extends \Twig_Extension
{

    /**
     * @var LanguageManager
     */
    private $languageManager;
    /**
     * @var TutorialManager
     */
    private $tutorialManager;
    /**
     * @var UserManager
     */
    private $userManager;

    /**
     * IndexPageExtension constructor.
     * @param LanguageManager $languageManager
     * @param TutorialManager $tutorialManager
     * @param UserManager $userManager
     */
    public function __construct(LanguageManager $languageManager, TutorialManager $tutorialManager, UserManager $userManager)
    {
        $this->languageManager = $languageManager;
        $this->tutorialManager = $tutorialManager;
        $this->userManager = $userManager;
    }

    /**
     *
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get_featured_languages', array($this, 'getFeaturedLanguages')),
            new \Twig_SimpleFunction('get_featured_tutorials', array($this, 'getFeaturedTutorials')),
            new \Twig_SimpleFunction('get_featured_users', array($this, 'getFeaturedUsers')),
        ];
    }

    /**
     * @return array
     */
    public function getFeaturedLanguages()
    {
        return $this->languageManager->getAllLanguagesWithFrameworks();
    }

    /**
     * @return array
     */
    public function getFeaturedTutorials()
    {
        return $this->tutorialManager->getFeaturedTutorials();
    }

    /**
     * @return array
     */
    public function getFeaturedUsers()
    {
        return $this->userManager->getFeaturedUsers();
    }
}