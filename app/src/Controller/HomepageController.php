<?php

namespace App\Controller;

use App\Repository\PostRepository;
use DateTimeImmutable;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    public function home(PostRepository $postRepository): Response
    {
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render(
            'homepage/home.html.twig',
            [
                'posts' => $posts,
                'user'  => $this->getStaticData(),
            ]
        );
    }

    private function getStaticData(): array
    {
        return [
            'name'     => 'Ryan Scheinder',
            'username' => '@ryan',
            'avatar'   => '/assets/img/ryan.jpg',
        ];
    }
}