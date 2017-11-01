<?php

namespace AppBundle\Controller\Blog;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog-page")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogPageAction(Request $request)
    {
        return $this->render('@App/frontend/blog/blog.html.twig', array());
    }

    /**
     * @Route("/blog/{slug}", name="blog-single")
     * @param Request $request
     * @param string $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogSingleAction(Request $request, $slug)
    {
        return $this->render('@App/frontend/blog/blog-single.html.twig', array(
            'slug' => $slug
        ));
    }
}
