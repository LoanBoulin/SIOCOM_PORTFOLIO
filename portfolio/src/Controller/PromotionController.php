<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Specialite ;
use App\Entity\Niveau ;
use App\Entity\Etudiant ;

class PromotionController extends AbstractController
{
    /*
     * liste les promotions en cours
     */
    public function list(): Response
    {    
        
        return $this->render('promotion/listPromos.html.twig');
    }

    /*
     * Liste les étudiants des promos non archivées par spécialité, par niveau
     */
    public function listEtudiantsParPromo($idSpecialite, $idNiveau): Response
    {

        $repository = $this->getDoctrine()->getRepository(Specialite::class);
        $specialite =  $repository->find($idSpecialite);

        $repository = $this->getDoctrine()->getRepository(Niveau::class);
        $niveau =  $repository->find($idNiveau);

        $repository = $this->getDoctrine()->getRepository(Etudiant::class);
        $etudiants = $repository->listParSpecialiteParNiveau($specialite,$niveau);

        return $this->render('promotion/listEtudiants.html.twig', [ 'etudiants' => $etudiants]);  
        
    }




    
}
