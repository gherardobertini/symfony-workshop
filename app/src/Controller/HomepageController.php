<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    public function home(): Response
    {
        return $this->render('homepage/home.html.twig', [
            'user_title'    => 'Ryan Scheinder',
            'user_category' => '@Ryan',
            'user_image' => 'assets/img/ryan.jpg',
            'items' => [
                [
                    'image' => 'assets/img/ryan.jpg',
                    
                ]
            ]
        ]);
    }
}