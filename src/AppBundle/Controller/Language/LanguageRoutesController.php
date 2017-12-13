<?php

namespace AppBundle\Controller\Language;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class LanguageRoutesController
 * @package AppBundle\Controller\Language
 */
class LanguageRoutesController extends Controller
{

    /**
     * @Route("/languages/{slug}", name="languages_frontend", defaults={"slug": ""})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $slug)
    {
        return $this->render('@App/frontend/language/all-available-languages/languages.html.twig', array('$slug' => $slug));
    }
}
