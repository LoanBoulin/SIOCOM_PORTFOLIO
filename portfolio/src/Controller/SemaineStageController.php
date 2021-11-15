<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SemaineStage ;
use App\Entity\Stage ;
use App\Form\SemaineStageType;

class SemaineStageController extends AbstractController
{
     /*
     * Permet à un étudiant d'ajouter ou de modifier des tâches lors d'une semaine de stage
     */
    public function addEditTache(Request $request, $idStage, $numSemaine): Response
    {
        $user = $this->getUser(); 
        
        
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repository->find($idStage);
        
        if ($stage->getEtudiant()->getid() != $user->getEtudiant()->getId()  ){
            throw $this->createAccessDeniedException();
        }

        $semaineStage = $stage->getSemaineStage($numSemaine);

        $formSemaineStage = $this->createForm(SemaineStageType::class, $semaineStage);
        $formSemaineStage->handleRequest($request);  

        if ($formSemaineStage->isSubmitted() && $formSemaineStage->isValid()) 
        {    
            $semaineStage = $formSemaineStage->getData();
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($stage);
            $entityManager->flush();
            $this->addFlash('success', 'Informations enregistrées avec succès !');                      
            return $this->render('semaine_stage/addEdit.html.twig', array('form' => $formSemaineStage->createView(), 'semaineStage'=>$semaineStage, 'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
            //return $this->redirectToRoute('etudiantRps');    
        }
        else
        {
            return $this->render('semaine_stage/addEdit.html.twig', array('form' => $formSemaineStage->createView(),'semaineStage'=>$semaineStage,'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   

        }          
    }



    /*
     * consultation de l'activité d'une semaine de stage d'un étudiant
    */
    public function showSemaine($idStage, $numSemaine)
    {
        $repository = $this->getDoctrine()->getRepository(Stage::class);
        $stage = $repository->find($idStage);
        $semaineStage = $stage->getSemaineStage($numSemaine);

        return $this->render('semaine_stage/show.html.twig', array('semaineStage'=>$semaineStage,'stage'=>$stage, 'templateTwigParent' => 'baseEnseignant.html.twig'));   
    }
}
