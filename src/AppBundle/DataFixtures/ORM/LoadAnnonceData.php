<?php

namespace App\DataFixtures;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\User;
use AppBundle\Entity\Commune;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadAnnonceData extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $annonce = new Annonce();
        $annonce->setTitre("Fin du numerus clausus, médecins salariés… les mesures du plan santé");
        $annonce->setDescription("Une batterie de 54 mesures touchant aussi bien l’organisation de la médecine libérale que de l’hôpital, 400 millions d’euros supplémentaires en 2019 (3,4 milliards au total d’ici à la fin du quinquennat), une nouvelle loi santé dans quelques mois… Les grandes lignes de la réforme du système de santé, baptisée « Ma santé 2022, un engagement collectif », ont été dévoilées, lundi 17 septembre par l’Elysée, avant leur présentation officielle mardi par le chef de l’Etat, Emmanuel Macron, et la ministre de la santé, Agnès Buzyn. Un plan copieux qui, sans être révolutionnaire, multiplie les angles de rénovation du système de santé.");
        $annonce->setActif(true);
        $annonce->setCreatedAt(new \DateTime());
        $annonce->setCommune($this->getReference("BOURGES"));
        $annonce->setCreator($this->getReference("auteur2"));
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitre("Macron aurait pu inciter ce jeune chômeur à persévérer dans l'horticulture");
        $annonce->setDescription("Jonathan Jahan, le jeune chômeur, a de son côté mal vécu cet échange. Spécialisé dans l'horticulture, il s'est vu suggéré de changer complètement de profession pour se tourner vers l'hôtellerie, la restauration et le bâtiment, trois secteurs qui peinent à recruter du fait des horaires, de la cadence des métiers proposés et de leur pénibilité. Mais le chef de l'État aurait pu tout autant lui recommander de percer dans sa formation initiale, l'horticulture: «l'art de cultiver les jardins, de pratiquer la culture des légumes, des fleurs, des arbres ou des arbustes fruitiers et d'ornement», selon le dictionnaire de l'Académie Française. Autrement dit, jardinier. Un métier accessible dès le niveau CAP/BEP selon le site de pôle emploi, qui propose de nombreuses formations de spécialisation en la matière (ornementale, légumière, sylviculture et pépinières).");
        $annonce->setActif(true);
        $annonce->setCreatedAt(new \DateTime());
        $annonce->setCommune($this->getReference("CLERMONT-FERRAND"));
        $annonce->setCreator($this->getReference("auteur1"));
        $manager->persist($annonce);

        $annonce = new Annonce();
        $annonce->setTitre("Ce que le remplacement de Gérard Collomb dit de la Macronie");
        $annonce->setDescription("En parallèle, le chef de l'Etat devrait aussi réfléchir au remplacement des autres ministres qui seraient tentés par l'aventure des municipales. A ce stade, quelques ambitions sont perceptibles: Christophe Castaner à Marseille, Benjamin Griveaux et Mounir Mahjoubi à Paris. Le cas de Gérald Darmanin candidat probable à Tourcoing pourrait faire débat, la ville nordiste n'étant pas une très grande métropole.");
        $annonce->setActif(true);
        $annonce->setCreatedAt(new \DateTime());
        $annonce->setCommune($this->getReference("CLERMONT-FERRAND"));
        $annonce->setCreator($this->getReference("auteur2"));
        $manager->persist($annonce);

        $manager->flush();
    }

    public function getDependencies()
    {
        return array(
            LoadUserData::class,
            LoadCommuneData::class,
        );
    }
}