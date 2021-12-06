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

        //Initialisation des variables
        $projets = [];
        $tempTwig = 'base.html.twig';

        //Conditions de rôle
        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
            $projets =  $repository->findAll();
            $tempTwig = 'baseAdmin.html.twig';
        }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
            $projets =  $this->getUser()->getEnseignant()->getProjetDefs();
            $tempTwig = 'baseEnseignant.html.twig';
        }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
            $groupes =  $this->getUser()->getGroupes();
            foreach ($groupes as $g) {
                foreach($g->getProjetDefs() as $p){
                    array_push($projets, $p);
                }
            }
            $tempTwig = 'baseEtudiant.html.twig';
        }

        return $this->render('projet/listProjets.html.twig', [ 'projets' => $projets, 'templateTwigParent' => $tempTwig,]);
    }



    function addProjet(Request $request){

        $tempTwig = 'base.html.twig';
        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
            $tempTwig = 'baseAdmin.html.twig';
        }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
            $tempTwig = 'baseEnseignant.html.twig';
        }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
            throw $this->createAccessDeniedException();
        }

        $projet = new ProjetDef();
        $form = $this->createForm(ProjetDefType::class, $projet);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
                $projet = $form->getData();

                //$entityManager = $this->getDoctrine()->getManager();
                //$entityManager->persist($projet);
                //$entityManager->flush();
                return $this->render('projet/consulterProjet.html.twig', ['projet' => $projet, 'templateTwigParent' => $tempTwig,]);
        }else{
                return $this->render('projet/addProjet.html.twig', array('form' => $form->createView(), 'templateTwigParent' => $tempTwig, ));
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
