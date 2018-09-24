<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Annonce;
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
        $annonce->setCreatedAt(new \DateTime('now'));
        $annonce->setActif(True);
    
        $form = $this->createFormBuilder($annonce)
            ->add('titre' ,TextType::class)
            ->add('description', TextareaType::class)
            ->add('created_at', DateType::class)
            ->add('commune', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Créer une annonce'))
            ->getForm();
        
            return $this->render('annonce/new_add.html.twig', [
                'form' => $form->createView(),
            ]);
    }
}
