<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Groupe;
use App\Entity\Post;
use App\Form\GroupeTypeForm;
use App\Form\PostType;

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

        $tempTwig = 'base.html.twig';
        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
            $tempTwig = 'baseAdmin.html.twig';
            $groupes =  $repository->findAll();
        }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
            $tempTwig = 'baseEnseignant.html.twig';  
            $groupes = $this->getUser()->getGroupes();
        }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
            $tempTwig = 'baseEtudiant.html.twig';
            $groupes = $this->getUser()->getGroupes();
        }

        return $this->render('groupe/listGroups.html.twig', [ 'groupes' => $groupes, 'templateTwigParent' => $tempTwig,]);
    }



    function addGroupe(Request $request){

        $tempTwig = 'base.html.twig';
        if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
            $tempTwig = 'baseAdmin.html.twig';
        }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
            $tempTwig = 'baseEnseignant.html.twig';
        }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
            $tempTwig = 'baseEtudiant.html.twig';
        }

        
        $groupe = new groupe();
        $form = $this->createForm(GroupeTypeForm::class, $groupe, ['champDesactive' => false,]);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
        
                $groupe = $form->getData();
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($groupe);
                $entityManager->flush();


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
            else
                {
                return $this->render('groupe/addGroupe.html.twig', array('form' => $form->createView(), 'templateTwigParent' => $tempTwig));
            }
        }

        public function addProjetGroupe($id, Request $request){

        
                $tempTwig = 'base.html.twig';
                if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
                    $tempTwig = 'baseAdmin.html.twig';
                }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
                    $tempTwig = 'baseEnseignant.html.twig';
                }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
                    throw $this->createAccessDeniedException();
                }
        
                $groupeTravail = new Groupe();
                $form = $this->createForm(GroupeType::class, $groupeTravail);
                $form->handleRequest($request);
                
                if ($form->isSubmitted() && $form->isValid()) {
                
                        $groupeTravail = $form->getData();

                        $projetDef = $this->getDoctrine()
                        ->getRepository(ProjetDef::class)
                        ->find($id);
                        $groupeTravail -> setProjetDef($projetDef);
        
                        $entityManager = $this->getDoctrine()->getManager();
                        $entityManager->persist($groupeTravail);
                        $entityManager->flush();
                        
                        return $this->render('groupe/consulterGroupeTravail.html.twig', ['projet' => $groupeTravail, 'templateTwigParent' => $tempTwig,]);
                }else{
                        return $this->render('groupe/addGroupe.html.twig', array('form' => $form->createView(), 'templateTwigParent' => $tempTwig, ));
                    }
        
                return $this->render('consulter/consulterGroupeTravail.html.twig', [ 'projets' => $groupeTravail, 'templateTwigParent' => $tempTwig,]);
            
        }
    
    
        public function consulterGroupe($id, Request $request){

            //R??cup??ration du groupe
            $groupe = $this->getDoctrine()
            ->getRepository(Groupe::class)
            ->find($id);
    
            if (!$groupe) {
                throw $this->createNotFoundException(
                'Aucun groupe trouv?? avec le num??ro '.$id
                );
            }

            //Gestion de l'insertion du post
            $post = new Post();
            $form = $this->createForm(PostType::class, $post);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
        
                $post = $form->getData();
                $post->setDateTimePost(new \DateTime());
                $post->addIdGroupe($groupe);
                $post->setUser($this->getUser());
        
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($post);
                $entityManager->flush();
            }
        
            //Gestion du head template
            $tempTwig = 'base.html.twig';
            if (in_array("ROLE_ADMIN", $this->getUser()->getRoles())){
                $tempTwig = 'baseAdmin.html.twig';
            }else if (in_array("ROLE_ENSEIGNANT", $this->getUser()->getRoles())){
                $tempTwig = 'baseEnseignant.html.twig';
            }else if (in_array("ROLE_ETUDIANT", $this->getUser()->getRoles())){
                $tempTwig = 'baseEtudiant.html.twig';
            }

            //Gestion de la page de groupe renvoy??e
            if($groupe->getGroupeType()->getLibelle() == "Travail"){
                return $this->render('groupe/consulterGroupeTravail.html.twig', [
                    'groupe' => $groupe,
                    'templateTwigParent' => $tempTwig,
                    'form' => $form->createView(),
                ]);
            }else{
                return $this->render('groupe/consulterGroupeSection.html.twig', [
                    'groupe' => $groupe,
                    'templateTwigParent' => $tempTwig,
                    'form' => $form->createView(),
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
            $this->addFlash('success', 'Le groupe de '. $groupe->getLibelle() .' a ??t?? supprim?? '. $groupe->getId());
            return $this->redirectToRoute('listGroups');
        }


}
