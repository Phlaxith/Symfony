<?php

namespace App\DataFixtures;

use AppBundle\Entity\Commune;
use AppBundle\Entity\Annonce;
use AppBundle\Entity\Departement;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCommuneData extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $commune = new Commune();
        $commune->setCommune("CLERMONT-FERRAND");
        $commune->setCodeInsee(63113);
        $commune->setDepartement($this->getReference("63"));
        $this->addReference("CLERMONT-FERRAND", $commune);
        $manager->persist($commune);

        $commune = new Commune();
        $commune->setCommune("COMBRAILLES");
        $commune->setCodeInsee(63115);
        $commune->setDepartement($this->getReference("63"));
        $this->addReference("COMBRAILLES", $commune);
        $manager->persist($commune);

        $commune = new Commune();
        $commune->setCommune("QUANTILLY");
        $commune->setCodeInsee(18189);
        $commune->setDepartement($this->getReference("18"));
        $this->addReference("QUANTILLY", $commune);
        $manager->persist($commune);

        $commune = new Commune();
        $commune->setCommune("BOURGES");
        $commune->setCodeInsee(18033);
        $commune->setDepartement($this->getReference("18"));
        $this->addReference("BOURGES", $commune);
        $manager->persist($commune);

        $manager->flush();
    }
    public function getDependencies()
    {
        return array(
            LoadDepartementData::class,
        );
    }
}