<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Etudiant;
use App\Entity\Enseignant;
use App\Entity\User;
use App\Entity\Post;
use App\Form\PostType;

class SecurityController extends AbstractController
{

    public function index(): Response
    {
        return $this->redirectToRoute('app_login');
    }
    /**
     * Méthode d'authentification
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // if ($this->getUser()) {
        //     return $this->redirectToRoute('target_path');
        // }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', ['last_username' => $lastUsername, 'error' => $error]);
        //return $this->render('security/login.html.twig', ['error' => $error]);
    }

    /**
     * Déconnexion
     */
    public function logout()
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    /**
     * Méthode redirigeant vers la page d'accueil selon rôle user après authentification
     */
    public function home(Request $request)
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $statut = $this->getUser()->getStatut();
        if ($statut == 'AC')
        {
            $role = $this->getUser()->getRoles()[0];


            if ($role == 'ROLE_ENSEIGNANT'){   

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
        return $this->render('enseignant/home.html.twig', [
            'enseignant' => $this->getUser()->getEnseignant(),
            'posts' => $posts,
            'form' => $form->createView(),
        ]);
            }



            if ($role == 'ROLE_ETUDIANT'){
           
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


            if ($role == 'ROLE_ADMIN'){
                $repository = $this->getDoctrine()->getRepository(Post::class);
                $posts =  $repository->findAll();
                return $this->render('admin/home.html.twig', [
                    'posts' => $posts,
                ]);  
            }
        }
    else
     {
        return $this->render('register/userNonValide.html.twig', [
            'pEtudiant' =>  $this->getUser()->getEtudiant(),
            ]);
     }
  
    }


}
