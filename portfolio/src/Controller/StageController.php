<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Stage ;
use App\Form\StageType;


class StageController extends AbstractController
{

    /**
    * Liste les stages  d'un étudiant connecté
    */
    public function getLesStagesByEtudiant(): Response
    {
        $etudiant = $this->getUser()->getEtudiant();
        return $this->render('etudiant/listeStagesByEtudiant.html.twig', ['etudiant' => $etudiant]);
    }


    /*
     * Permet à un étudiant d'ajouter ou de modifier un stage
     */
    public function addEdit(Request $request, $idStage): Response
    {
        $user = $this->getUser();  
        // paramètre par défaut de la route à 0. Si 0, on crée une nouvelle rp
        if ($idStage == 0)
        {
            $stage = new Stage();         
        }
        else
        {
           // on est en modification
            $repository = $this->getDoctrine()->getRepository(Stage::class);
            $stage = $repository->find($idStage);
            
            if ($stage->getEtudiant()->getid() != $user->getEtudiant()->getId()  ){
                throw $this->createAccessDeniedException();
            }
        }
        $etudiant = $this->getUser()->getEtudiant();

     
        $formStage = $this->createForm(StageType::class, $stage, ['champDesactive' => false,]);
        $formStage->handleRequest($request);  

        if(!$etudiant){
            echo ("etudiant non trouvé");
            throw $this->createNotFoundException('Aucun etudiant connecté !!!');
        }
        else
        {
           
            if ($formStage->isSubmitted() && $formStage->isValid()) 
            {    
                $stage = $formStage->getData();
                $stage->setEtudiant($etudiant);
            
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($stage);
                $entityManager->flush();
                $this->addFlash('success', 'Informations enregistrées avec succès !');                      
                return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(), 'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
                //return $this->redirectToRoute('etudiantRps');    
            }
            else
            {
                return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(),'stage'=>$stage, 'templateTwigParent' => 'baseEtudiant.html.twig'));   
   
            }

        }       
    }

   
    /**
    * Liste les stages suivis par un enseignant
    */
    public function getLesStagesSuivis(): Response
    {
        $enseignant = $this->getUser()->getEnseignant();
        return $this->render('enseignant/stage/listeStagesSuivis.html.twig', ['enseignant' => $enseignant]);
    }

    /**
    * consultation d'un stage par un enseignant
    */
    public function showStage($idStage): Response
    {
        $enseignant = $this->getUser()->getEnseignant();
       $repository = $this->getDoctrine()->getRepository(Stage::class);
       $stage = $repository->find($idStage);

       $formStage = $this->createForm(StageType::class, $stage,['champDesactive' => true,]);
       return $this->render('stage/showAddEdit.html.twig', array('form' => $formStage->createView(), 'stage'=>$stage, 'templateTwigParent' => 'baseEnseignant.html.twig'));   
      
       //$formStage->handleRequest($request); 
          
        //return $this->render('enseignant/stage/show.html.twig', ['stage' => $stage]);
    }



}
