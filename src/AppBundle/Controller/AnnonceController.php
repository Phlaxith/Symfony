<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AnnonceController extends Controller
{
    /**
     * @Route("/annonces/", name="annonce")
     */
    public function backofficeAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Annonce::class);

        $annonces = $repository->findBy([
            "actif" => true,
        ]);

        return $this->render("annonce/list.html.twig", [
            "annonces" => $annonces,
        ]);
    }
}
