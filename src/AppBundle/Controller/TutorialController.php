<?php

namespace AppBundle\Controller;

use AppBundle\Manager\TutorialManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TutorialController
 * @package AppBundle\Controller
 */
class TutorialController extends Controller
{

    /**
     * @var TutorialManager
     */
    private $tutorialManager;

    /**
     * TutorialController constructor.
     * @param TutorialManager $tutorialManager
     */
    public function __construct(TutorialManager $tutorialManager)
    {
        $this->tutorialManager = $tutorialManager;
    }

    /**
     * @Route("/tutorials", name="all_tutorials_page")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function allTutorialsAction(Request $request)
    {

        return $this->render('@App/frontend/tutorial/all-tutorials/tutorials.html.twig', array(
            'tutorials' => $this->tutorialManager->getFeaturedTutorials()
        ));
    }
}
