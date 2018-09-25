<?php

namespace AppBundle\Controller;
// namespace FOS\UserBundle\Doctrine;

// use FOS\UserBundle\Model\UserManager;

use AppBundle\Entity\Annonce;
use AppBundle\Entity\User;
use AppBundle\Form\AnnonceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

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

    /**
     * @Route("/annonces/add", name="add_annonce")
     */
    public function createAddAction(Request $request){    
        $annonce = new Annonce();
        // on prédéfinit des champs invisibles à l'utilisateur
        $annonce->setCreatedAt(new \DateTime('now'));
        $annonce->setActif(True);
        $annonce->setCreator($this->getUser());
        
        $form = $this->createForm(AnnonceType::class, $annonce);
        
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            // on créé l'objet en BDD
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($annonce);
            $entityManager->flush();

            // on redirige vers les annonces
            return $this->redirect($this->generateUrl('annonce'));
        }
            
        return $this->render('annonce/new_add.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/annonces/{id}", requirements={"id"="\d+"}, name="details_add")
     */
    public function getAddById($id){
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository(Annonce::class);

        $add = $repository->findBy([
            "id" => $id,
        ]);
        return $this->render('annonce/details.html.twig', [
            'add' => $add,
        ]);
    }
}
