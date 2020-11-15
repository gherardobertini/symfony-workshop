<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function homepage(): Response
    {
        return $this->render('home/homepage.html.twig');
    }
}