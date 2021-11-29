<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\UserEnseignantType;


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
    public function home(): Response
    {
        return $this->render('enseignant/home.html.twig');
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
