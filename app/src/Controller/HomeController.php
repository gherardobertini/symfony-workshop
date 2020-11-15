<?php

namespace App\Controller;

use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function homepage(): Response
    {
        return $this->render(
            'home/homepage.html.twig',
            [
                'user'  => [
                    'name'     => 'Ryan Scheinder',
                    'username' => '@ryan',
                    'avatar'   => '/assets/img/ryan.jpg',
                ],
                'posts' => [
                    [
                        'author'  => [
                            'name'     => 'Ryan Scheinder',
                            'username' => '@ryan',
                            'avatar'   => '/assets/img/ryan.jpg',
                        ],
                        'title'   => 'Enjoy the story you are living',
                        'content' => 'Sometimes you have to let go of the picture of what you thought it would be like and learn to find joy in the story you are actually living.',
                        'createdAt' => new DateTimeImmutable('2020-05-02 11:00:00')
                    ],
                    [
                        'author'  => [
                            'name'     => 'Julie Standford',
                            'username' => '@julie',
                            'avatar'   => '/assets/img/julie.jpg',
                        ],
                        'title'   => 'Live for what today has to offer',
                        'content' => 'If you don’t leave your past in the past, it will destroy your future. Live for what today has to offer, not what yesterday has taken away.',
                        'createdAt' => new DateTimeImmutable('2020-06-22 15:00:00')
                    ],
                    [
                        'author'  => [
                            'name'     => 'Julie Standford',
                            'username' => '@julie',
                            'avatar'   => '/assets/img/julie.jpg',
                        ],
                        'title'   => 'Karma',
                        'content' => 'What goes around comes around. Keep your circle positive. Speak good  words. Think good thoughts. Do good deeds.',
                        'createdAt' => new DateTimeImmutable('2020-07-18 01:00:00')
                    ],
                ],
            ]
        );
    }
}