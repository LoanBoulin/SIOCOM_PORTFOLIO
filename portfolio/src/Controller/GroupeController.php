<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Groupe;
use App\Form\GroupeTypeForm;

class GroupeController extends AbstractController
{
    /**
     * @Route("/groupe", name="groupe")
     */
    public function index(): Response
    {
        return $this->render('groupe/index.html.twig', [
            'controller_name' => 'GroupeController',
        ]);
    }

    public function list(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Groupe::class);

        if($this->getUser()->getRoles() == ["ROLE_ADMIN"] ){
            $tempTwig = 'baseAdmin.html.twig';
            $groupes =  $repository->findAll();
        }else if($this->getUser()->getRoles() == ["ROLE_ENSEIGNANT"] ){
            $tempTwig = 'baseEnseignant.html.twig';  
            $groupes = $this->getUser()->getGroupes();
        }else if($this->getUser()->getRoles() == ["ROLE_ETUDIANT"] ){
            $tempTwig = 'baseEtudiant.html.twig';
            $groupes = $this->getUser()->getGroupes();
            
        }

        return $this->render('groupe/listGroups.html.twig', [ 'groupes' => $groupes, 'templateTwigParent' => $tempTwig,]);
    }



    function addGroupe(Request $request){
        $groupe = new groupe();
        $form = $this->createForm(GroupeTypeForm::class, $groupe);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
                $groupe = $form->getData();
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($groupe);
                $entityManager->flush();
                return $this->render('groupe/consulterGroupe.html.twig', ['groupe' => $groupe,]);
        }
            else
                {
                return $this->render('groupe/addGroupe.html.twig', array('form' => $form->createView(),));
            }
        }
    
    
        public function consulterGroupe($id){
            
            $groupe = $this->getDoctrine()
            ->getRepository(Groupe::class)
            ->find($id);
    
            if (!$groupe) {
                throw $this->createNotFoundException(
                'Aucun groupe trouvé avec le numéro '.$id
                );
            }

            $tempTwig = 'base.html.twig';

            if($this->getUser()->getRoles() == ["ROLE_ADMIN"] ){
                $tempTwig = 'baseAdmin.html.twig';
            }else if($this->getUser()->getRoles() == ["ROLE_ENSEIGNANT"] ){
                $tempTwig = 'baseEnseignant.html.twig';
            }else if($this->getUser()->getRoles() == ["ROLE_ETUDIANT"] ){
                $tempTwig = 'baseEtudiant.html.twig';
            }

            if($groupe->getGroupeType()->getLibelle() == "Travail"){
                return $this->render('groupe/consulterGroupeTravail.html.twig', [
                    'groupe' => $groupe,
                    'templateTwigParent' => $tempTwig,
                ]);
            }else{
                return $this->render('groupe/consulterGroupeSection.html.twig', [
                    'groupe' => $groupe,
                    'templateTwigParent' => $tempTwig,
                ]);
            }
    
            
        }
    
        public function supprimerGroupe($id): Response
        {
            $repository = $this->getDoctrine()->getRepository(Groupe::class);
            $groupe = $repository->findOneBy(['id' => $id]);
           
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($groupe);
            //$entityManager->persist($groupe);
            $entityManager->flush();
            $this->addFlash('success', 'Le groupe de '. $groupe->getLibelle() .' a été supprimé '. $groupe->getId());
            return $this->redirectToRoute('listGroups');
        }


}
