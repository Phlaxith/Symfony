<?php

namespace App\DataFixtures;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadUserData extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail("woter2201@gmail.com");
        $user->addRole("ROLE_ADMIN");
        $user->setPlainPassword("test");
        $user->setUsername("phlaxith");
        $user->setEnabled(true);
        $manager->persist($user);

        $user = new User();
        $user->setEmail("auteur1@ipi.com");
        $user->addRole("ROLE_USER");
        $user->setPlainPassword("test");
        $user->setUsername("auteur1");
        $user->setEnabled(true);
        $this->addReference("auteur1", $user);
        $manager->persist($user);

        $user = new User();
        $user->setEmail("auteur2@ipi.com");
        $user->addRole("ROLE_USER");
        $user->setPlainPassword("test");
        $user->setUsername("auteur2");
        $user->setEnabled(true);
        $this->addReference("auteur2", $user);
        $manager->persist($user);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}