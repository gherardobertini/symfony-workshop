<?php

namespace App\DataFixtures;

use App\Entity\Post;
use App\Entity\User;
use DateTimeImmutable;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /** @var UserPasswordEncoderInterface */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $this->createRyanContents($manager);
        $this->createJulieContents($manager);

        $manager->flush();
    }

    private function createRyanContents(ObjectManager $manager): void
    {
        $ryan = new User();
        $ryan->setEmail('ryan@ryan.it');
        $ryan->setUsername('ryan');
        $ryan->setFullName('Ryan Scheinder');
        $ryan->setAvatar('/assets/img/ryan.jpg');
        $ryan->setCreatedAt(new DateTimeImmutable());

        $password = $this->passwordEncoder->encodePassword($ryan, 'ryan');
        $ryan->setPassword($password);


        $post = new Post();
        $post->setTitle('Enjoy the story you are living');
        $post->setContent('Sometimes you have to let go of the picture of what you thought it would be like and learn to find joy in the story you are actually living.');
        $post->setAuthor($ryan);
        $post->setCreatedAt(new DateTimeImmutable('2020-05-02 11:00:00'));

        $manager->persist($ryan);
        $manager->persist($post);
    }

    private function createJulieContents(ObjectManager $manager): void
    {
        $julie = new User();
        $julie->setEmail('julie@julie.it');
        $julie->setPassword('julie');
        $julie->setUsername('julie');
        $julie->setFullName('Julie Standford');
        $julie->setAvatar('/assets/img/julie.jpg');
        $julie->setCreatedAt(new DateTimeImmutable());

        $password = $this->passwordEncoder->encodePassword($julie, 'julie');
        $julie->setPassword($password);

        $post = new Post();
        $post->setTitle('Live for what today has to offer');
        $post->setContent('If you don’t leave your past in the past, it will destroy your future. Live for what today has to offer, not what yesterday has taken away.');
        $post->setAuthor($julie);
        $post->setCreatedAt(new DateTimeImmutable('2020-06-22 15:00:00'));
        $manager->persist($post);

        $post = new Post();
        $post->setTitle('Karma');
        $post->setContent('What goes around comes around. Keep your circle positive. Speak good  words. Think good thoughts. Do good deeds.');
        $post->setAuthor($julie);
        $post->setCreatedAt(new DateTimeImmutable('2020-07-18 01:00:00'));
        $manager->persist($post);

        $manager->persist($julie);
    }
}
