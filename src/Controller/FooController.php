<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FooController extends AbstractController
{
    /**
     * @Route("/welcome", name="foo")
     */
    public function index()
    {
        return $this->render('foo/index.html.twig', [
            'controller_name' => 'FooController',
        ]);
    }
}
