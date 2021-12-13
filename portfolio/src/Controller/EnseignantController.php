<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserEnseignantType;
use App\Entity\Groupe;
use App\Form\PostType;
use App\Entity\Post;


class EnseignantController extends AbstractController
{
    /**
     * @Route("/enseignant", name="enseignant")
     */
    public function index(): Response
    {
        return $this->render('enseignant/index.html.twig', [
            'controller_name' => 'EnseignantController',
        ]);
    }

    /**
     * page d'accueil enseignant
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
 
        }

        //Affichage de sortie
        return $this->render('enseignant/home.html.twig', [
            'enseignant' => $this->getUser()->getEtudiant(),
            'posts' => $posts,
            'form' => $form->createView(),
        ]);
    }

    /**
    * consultation et édition d'un enseignant
    */
    public function showEdit(Request $request): Response
    {
        $userEnseignant =$this->getUser();
       
     
        $form = $this->createForm(UserEnseignantType::class, $userEnseignant, ['champDesactive' => true,]);
        $form->handleRequest($request);
 
        if ($form->isSubmitted() && $form->isValid()) 
        {
                $entityManager = $this->getDoctrine()->getManager();

                //on renomme le fichier avec l'id enseignant et on l'upload sur le serveur dans le dossier configuré dans service.yaml     
                $fileDownload = $form['upload_file']->getData();
                if (file_exists($fileDownload))
                {
                    $fileName = $userEnseignant->getEnseignant()->getId().'.'.$fileDownload->guessExtension();         
                    $fileDownload->move(
                        $this->getParameter('upload_directory_enseignant'),
                        $fileName
                    );
                }
                $entityManager->persist($userEnseignant);
                $entityManager->flush();
                $this->addFlash('success', 'Informations modifiées avec succès !');
        }
        return $this->render('enseignant/registerEnseignant.html.twig', array(
                    'form' => $form->createView(),  'templateTwigParent' => 'baseEnseignant.html.twig'));   
    
    }

}
