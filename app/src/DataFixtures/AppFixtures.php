<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ryan = new User();
        $ryan->setUsername('ryan');
        $ryan->setFullName('Ryan Scheinder');
        $ryan->setAvatar('/assets/img/ryan.jpg');

        $julie = new User();
        $julie->setUsername('julie');
        $julie->setFullName('Julie Standford');
        $julie->setAvatar('/assets/img/julie.jpg');

        $manager->persist($ryan);
        $manager->persist($julie);

        $manager->flush();
    }
}
