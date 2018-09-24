<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $user = $this->getUser();
        if(!empty($user)){
            if($user->hasRole("ROLE_ADMIN")){
                // Redirection sur le back office
                return $this->redirectToRoute("back_office");
            }

            if($user->hasRole("ROLE_USER")){
                // Redirection sur la liste des annonces
            }
        }
        return $this->render("default/index.html.twig");
        // return $this->redirectToRoute("annonce");
    }

    /**
     * @Route("/back-office/", name="back_office")
     */
    public function backofficeAction(Request $request)
    {
        return $this->render("admin/index.html.twig");
    }
}
