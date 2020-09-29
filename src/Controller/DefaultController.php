<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Netgen\Layouts\Contentful\Service\Contentful;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request, Contentful $contentful)
    {
        // replace this example code with whatever you need
        return $this->render('content/full/ng_frontpage.html.twig', [
            'page_css_class' => "homepage",
        ]);
    }
}
