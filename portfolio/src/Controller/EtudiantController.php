<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Etudiant;
use App\Entity\RP;
use App\Entity\Groupe;
use App\Form\UserEtudiantType;
use App\Form\PostType;
use App\Entity\Post;


class EtudiantController extends AbstractController
{
    /*
     * Page accueil étudiant : renvoie la liste des 7 dernières rp et des stages
     */
    public function home(Request $request)
    {

        $lesGroupes = $this->getUser()->getGroupes();
        $posts = [];
        foreach ($lesGroupes as $g) {
            foreach($g->getPosts() as $p){
                if (!in_array($p, $posts)){
                    array_push($posts, $p);
                }
            }
        }

        //Gestion de l'insertion du post
        $post = new Post();
        $form = $this->createForm(PostType::class, $post, ['insertHome' => true, 'groups' => $lesGroupes]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
    
            $post = $form->getData();
            $post->setDateTimePost(new \DateTime());
            $post->setUser($this->getUser());
            //$post->setType($this->getUser());

            if( sizeof($post->getIdGroupe()) != 0){              
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($post);
                $entityManager->flush();
            }
            array_push($posts, $post);
 
        }

        //Affichage de sortie
        return $this->render('etudiant/home.html.twig', [
            'etudiant' => $this->getUser()->getEtudiant(),
            'posts' => $posts,
            'form' => $form->createView(),
        ]);
    }


    /**
     * Consultation /Edition d'un étudiant
     */
    public function showEdit(Request $request) : Response
    {
        $this->denyAccessUnlessGranted('ROLE_ETUDIANT');
        $user = $this->getUser();
        
        $form = $this->createForm(UserEtudiantType::class, $user, ['champDesactive' => true,]);
        $form->handleRequest($request);  

        if(!$user){
            echo ("etudiant non trouvé");
            throw $this->createNotFoundException('Aucun user connecté !!!');
        }
        else
        {
            if ($form->isSubmitted() && $form->isValid()){
                
                $user = $form->getData();
                $entityManager = $this->getDoctrine()->getManager();
              
                //on renomme le fichier avec l'id etudiant et on l'upload sur le serveur dans le dossier configuré dans service.yaml     
                $fileDownload = $form['upload_file']->getData();
                if (file_exists($fileDownload))
                {
                    $fileName = $user->getEtudiant()->getId().'.'.$fileDownload->guessExtension();         
                    $fileDownload->move(
                         $this->getParameter('upload_directory'),
                         $fileName
                    );
                }

                $entityManager->persist($user);
                $entityManager->flush();

                $this->addFlash('success', 'Informations modifiées avec succès !');
                return $this->render('etudiant/showEdit.html.twig', array('form' => $form->createView(),  'templateTwigParent' => 'baseEtudiant.html.twig'));       
          
            }else{  

                return $this->render('etudiant/showEdit.html.twig', array('form' => $form->createView(),  'templateTwigParent' => 'baseEtudiant.html.twig'));
            }

        }
    }




    /*
     * 
     *
    public function getEtudiant(Request $request) : Response
    {
        $this->denyAccessUnlessGranted('ROLE_ETUDIANT');
        $etudiant = $this->getUser()->getEtudiant();
        
        $formEtudiant = $this->createForm(EtudiantType::class, $etudiant);
        $formEtudiant->handleRequest($request);  

        if(!$etudiant){
            echo ("etudiant non trouvé");
            throw $this->createNotFoundException('Aucun etudiant connecté !!!');
        }
        else
        {
            //var_dump($etudiant) ;
            if ($formEtudiant->isSubmitted() && $formEtudiant->isValid()) 
            {
                //var_dump($etudiant) ;
                $etudiant = $formEtudiant->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($etudiant);
                $entityManager->flush();
                
                //on renomme le fichier avec l'id etudiant et on l'upload sur le serveur dans le dossier configuré dans service.yaml
                $fileDownload = $formEtudiant['upload_file']->getData();
                if (file_exists($fileDownload))
                {
                    $fileName = $etudiant->getId().'.'.$fileDownload->guessExtension();         
                    $fileDownload->move(
                         $this->getParameter('upload_directory'),
                         $fileName
                    );
                }
                $this->addFlash('success', 'Informations modifiées avec succès !');
                return $this->render('etudiant/showEdit.html.twig', array('form' => $formEtudiant->createView()));       
          }
            else
            {
               
                return $this->render('etudiant/showEdit.html.twig', array('form' => $formEtudiant->createView()));
   
            }

        }
    }*/

    /* 
     * Liste les groupes d'un utilisateur connecté
     */
    public function getLesGroupes(): Response
    { 
    
        $user = $this->getUser();

        $repository = $this->getDoctrine()->getRepository(Groupe::class);
        $lesGroupes = $repository->findBy(
            ['user_id' => $etudiant->getid() ]);
        
        //return $this->render('etudiant/listRPs.html.twig', ['lesRps' => $lesRps]);
    }

    /* 
     * Liste les rps d'un étudiant connecté
     */
    public function getLesRP(): Response
    { 
    
        $etudiant = $this->getUser()->getEtudiant();

        $repository = $this->getDoctrine()->getRepository(RP::class);
        $lesRps = $repository->findBy(
            ['etudiant' => $etudiant->getid(), 'archivage' => 0], array('dateModif'=>'desc'));
        return $this->render('etudiant/listRPs.html.twig', ['lesRps' => $lesRps]);
    }

    /*
     * Liste les rp archivées d'un étudiant connecté
     */
    public function getLesRPArchivées(): Response
    { 
    
        $etudiant = $this->getUser()->getEtudiant();
        //echo ('nom etudiant connecté '. $etudiant->getNom());

        $repository = $this->getDoctrine()->getRepository(RP::class);
        $lesRps = $repository->findBy(
            ['etudiant' => $etudiant->getid(), 'archivage' => 1], array('dateModif'=>'desc'));
        
        
        return $this->render('etudiant/listRPs.html.twig', [ 'lesRps' => $lesRps]);
    }


    /*
     * liste les rp par statut ???
     *
    public function getLesRPByStatut($idStatut): Response
    { 
    
        $etudiant = $this->getUser()->getEtudiant();
        //echo ('nom etudiant connecté '. $etudiant->getNom());

        $repository = $this->getDoctrine()->getRepository(RP::class);
        $lesRps = $repository->findBy(
            ['etudiant' => $etudiant->getid(), 'archivage' => 0, 'statut' => $idStatut], array('dateModif'=>'desc'));
        
        
        return $this->render('etudiant/listerRPs.html.twig', [ 'lesRps' => $lesRps]);
    }*/

}   