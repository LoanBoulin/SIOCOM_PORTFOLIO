<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Demande;
use App\Entity\Statut;

use App\Form\DemandeForm;

class DemandeController extends AbstractController
{
    /**
     * @Route("/demande", name="demande")
     */
    public function index(): Response
    {
        return $this->render('demande/index.html.twig', [
            'controller_name' => 'DemandeController',
        ]);
    }

    public function consulterDemande($id){
            
        $demande = $this->getDoctrine()
        ->getRepository(Demande::class)
        ->find($id);

        if (!$demande) {
            throw $this->createNotFoundException(
            'Aucune demande trouvée avec le numéro '.$id
            );
        }

        //return new Response('Demande : '.$demande->getId());
        return $this->render('demande/consulterDemande.html.twig', [
            'demande' => $demande,]);
    }

    function addEtudiantGroupe(Request $request){
        $demande = new demande();
        $form = $this->createForm(DemandeForm::class, $demande);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
                $demande = $form->getData();
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($demande);
                $entityManager->flush();
                return $this->render('demande/consulterDemande.html.twig', ['demande' => $demande,]);
        }
            else
                {
                return $this->render('demande/addDemande.html.twig', array('form' => $form->createView(),));
            }
        }
    

}
