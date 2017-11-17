<?php

namespace AppBundle\Business\Extension;

use AppBundle\Manager\LanguageManager;
use AppBundle\Manager\TutorialManager;

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

    public function __construct(LanguageManager $languageManager, TutorialManager $tutorialManager)
    {
        $this->languageManager = $languageManager;
        $this->tutorialManager = $tutorialManager;
    }

    /**
     *
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('get_featured_languages', array($this, 'getFeaturedLanguages')),
            new \Twig_SimpleFunction('get_featured_tutorials', array($this, 'getFeaturedTutorials')),
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
}