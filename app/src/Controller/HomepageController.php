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
        $user = $this->getUser();        
        $posts = $postRepository->findBy([], ['createdAt' => 'DESC']);

        return $this->render(
            'homepage/home.html.twig',
            [
                'posts' => $posts,
                'user'  => $user,
            ]
        );
    }
}