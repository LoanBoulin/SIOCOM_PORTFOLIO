<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Groupe;

class GroupeController extends AbstractController
{
    /**
     * @Route("/groupe", name="groupe")
     */
    public function list(): Response
    {
        $repository = $this->getDoctrine()->getRepository(Groupe::class);
        $groupes =  $repository->findAll();



        
        return $this->render('groupe/listGroups.html.twig', [ 'groupes' => $groupes]);
    }
}
