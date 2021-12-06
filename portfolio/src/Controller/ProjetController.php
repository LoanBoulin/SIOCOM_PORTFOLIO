<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\ProjetDef;
use App\Entity\Matiere;
use App\Form\ProjetDefType;


class ProjetController extends AbstractController
{
    /**
     * @Route("/projet", name="projet")
     */
    public function index(): Response
    {
        return $this->render('projet/index.html.twig', [
            'controller_name' => 'ProjetController',
        ]);
    }

    public function listProjet(): Response
    {
        $repository = $this->getDoctrine()->getRepository(ProjetDef::class);
        $projets =  $repository->findAll();
        return $this->render('projet/listProjets.html.twig', [ 'projets' => $projets]);
    }



    function addProjet(Request $request){
        $projet = new projet();
        $form = $this->createForm(ProjetDefType::class, $projet);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
                $projet = $form->getData();
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($projet);
                $entityManager->flush();
                return $this->render('projet/consulterProjet.html.twig', ['projet' => $projet,]);
        }
            else
                {
                return $this->render('projet/addProjet.html.twig', array('form' => $form->createView(),));
            }
        }
    
    
        public function consulterProjet($id){
            
            $projet = $this->getDoctrine()
            ->getRepository(ProjetDef::class)
            ->find($id);
    
            if (!$projet) {
                throw $this->createNotFoundException(
                'Aucun projet trouvé avec le numéro '.$id
                );
            }
    
            //return new Response('Projet : '.$projet->getId());
            return $this->render('projet/consulterProjet.html.twig', [
                'projet' => $projet,]);
        }
    
    
        public function supprimerProjet($id): Response
        {
            $repository = $this->getDoctrine()->getRepository(ProjetDef::class);
            $projet = $repository->findOneBy(['id' => $id]);
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($projet);
            //$entityManager->persist($projet);
            $entityManager->flush();
            $this->addFlash('success', 'Le projet de '. $projet->getLibelle() .' a été supprimé '. $projet->getId());
            return $this->redirectToRoute('listProjets');
        }
}
