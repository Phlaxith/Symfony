<?php

namespace App\DataFixtures;

use AppBundle\Entity\Departement;
use AppBundle\Entity\Commune;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadDepartementData extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $departement = new Departement();
        $departement->setDepartement("Puy-de-Dôme");
        $departement->setNumero(63);
        $this->addReference("63", $departement);
        $manager->persist($departement);

        $departement = new Departement();
        $departement->setDepartement("Cher");
        $departement->setNumero(18);
        $this->addReference("18", $departement);
        $manager->persist($departement);

        $departement = new Departement();
        $departement->setDepartement("Ain");
        $departement->setNumero(01);
        $this->addReference("01", $departement);
        $manager->persist($departement);

        $manager->flush();
    }
}