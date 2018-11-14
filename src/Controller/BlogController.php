<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route("/blog/{slug}", requirements={"slug"="[a-z]|-|\d+"}, name="blog_show")
     * @param $slug
     *
     * @return Response
     */
    public function show($slug = null)
    {
        return $this->render('blog/show.html.twig', ['slug' => $slug]);
    }
}
