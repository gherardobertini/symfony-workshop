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
            'user' => [
                'title'    => 'Ryan Scheinder',
                'category' => '@Ryan',
                'image' => 'assets/img/ryan.jpg',
            ],
            'posts' => [
                [
                    'image'      => 'assets/img/ryan.jpg',
                    'title'      => 'Card title',
                    'content'    => 'This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.',
                    'updated_at' => new \Datetime(),
                ],
                [
                    'image'      => 'assets/img/julie.jpg',
                    'title'      => 'Card title',
                    'content'    => 'This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.',
                    'updated_at' => new \Datetime(),
                ],
                [
                    'image'   => 'assets/img/julie.jpg',
                    'title'   => 'Card title',
                    'content' => 'This is a wider card with supporting text below as a natural lead-in to
                    additional content. This content is a little bit longer.',
                    'updated_at' => new \Datetime(),
                ],                
            ]
        ]);
    }
}