<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\RP ;
use App\Entity\Etudiant ;
use App\Entity\RPActivite ;
use App\Entity\Statut ;
use App\Form\RpActiviteType;
use App\Form\RPType;

class RpActiviteController extends AbstractController
{

    /*
     * Liste les activités d'une rp passée en paramètre
     */
    public function rpActiviteList(Request $request, $idRp): Response
    {
        if ($idRp == 0)
        {
            $rpActivite = new RPActivite();
            return new Response ('gérer ce cas ou pas de rp et on clique sur activites- renvoyer vers formulaire');
        }
        else
        //idRpActivite est différent de 0, on veut donc modifier une rpActiicite existante
        {
            $repository = $this->getDoctrine()->getRepository(RP::class);
            $rp = $repository->find($idRp);

            if ($this->getUser()->getEnseignant() !=null )
            {
                return $this->render('rp/activite/listActivitesRp.html.twig', array('rp'=> $rp, 'templateTwigParent' => 'baseEnseignant.html.twig'));
            }
            else
            {
                if ($rp->getEtudiant()->getid() != $this->getUser()->getEtudiant()->getId()  ){
                throw $this->createAccessDeniedException();
                }
                return $this->render('rp/activite/listActivitesRp.html.twig', array('rp'=> $rp, 'templateTwigParent' => 'baseEtudiant.html.twig'));
            }
           
        }
    }

    /*
     * Edite une activité dont l'id est passé en paramètre
     */
    public function rpActiviteEdit(Request $request, $idRpActivite): Response
    {
        //$user = $this->getUser();

        //si idRpActivite=0, c'est une nouvelle acticité pour cette rp
        if ($idRpActivite == 0)
        {
            $rpActivite = new RPActivite();
            
        }
        else
        //idRpActivite est différent de 0, on veut donc modifier une rpActivite existante
        {
            $repository = $this->getDoctrine()->getRepository(RPActivite::class);
            $rpActivite = $repository->find($idRpActivite);

            $formAct = $this->createForm(RpActiviteType::class, $rpActivite);
            $formAct->handleRequest($request);
        
            if ($formAct->isSubmitted() && $formAct->isValid()) 
            {
                //$rp = $rpActivite->getRP();
                $rpActivite = $formAct->getData();
            
                $repository = $this->getDoctrine()->getRepository(RP::class);
                //$rp = $repository->find($rpActivite->getRp());

                //$rpActivite->setRp($rp);

                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($rpActivite);
                $entityManager->flush(); 
            
                // retourner la liste des activites de la rp 
                //return $this->render('rp/listActivitesRp.html.twig', array('rp'=> $rpActivite.rp.id));
                return $this->redirectToRoute('rpActiviteList', ['idRp' => $rpActivite->getRP()->getId()]);
            
            }
            return $this->render('rp/activite/addEdit.html.twig', array('form' => $formAct->createView(), 'idRp' => $rpActivite->getRP()->getId()));
        }
    }

    /*
     * Permet d'ajouter une activité dont l'id rp est passé en paramètre
     */
    public function rpActiviteAdd(Request $request, $idRp): Response
    {
        $rpAct = new RPActivite();
	    $form = $this->createForm(RpActiviteType::class, $rpAct);
	    $form->handleRequest($request);
 
	    if ($form->isSubmitted() && $form->isValid()) {
            
            $repository = $this->getDoctrine()->getRepository(RP::class);
            $rp = $repository->find($idRp);

            $rpAct = $form->getData();
            $rpAct->setRP($rp);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($rpAct);
            $entityManager->flush();
            return $this->redirectToRoute('rpActiviteList', ['idRp' => $idRp]);
            
	    }
	    else
        {
            return $this->render('rp/activite/addEdit.html.twig', array('form' => $form->createView(), 'idRp' =>$idRp));
	    }
    }

    /*
     * Permet de supprimer une activité dont l'id est passée en paramètre
     */
    public function rpActiviteRemove($idRpActivite): Response
    {        
        $repository = $this->getDoctrine()->getRepository(RPActivite::class);
        $rpActivite = $repository->find($idRpActivite);
        if ($rpActivite->getRp()->getEtudiant()->getid() != $this->getUser()->getEtudiant()->getId()  ){
            throw $this->createAccessDeniedException();
        }

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($rpActivite);
        $entityManager->flush();
        return $this->redirectToRoute('rpActiviteList', ['idRp' => $rpActivite->getRp()->getId()]);
            

    }
}
