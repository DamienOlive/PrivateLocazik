<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Entity\Annonce;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;
use Locazik\AnnonceBundle\Form\AnnonceType;
use Locazik\AnnonceBundle\Form\AnnonceValidationType;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        
    }
    
    public function creerAnnonceAction()
    {
        $annonce = new Annonce();
        $form = $this->createForm(new AnnonceType(), $annonce);
        
        $request = $this->get('request');
        
        if($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $imageAnnonces = $annonce->getImageAnnonces();                
                // possibilité d'upload plusieurs fichiers
                if($imageAnnonces != null)
                {
                   foreach($imageAnnonces as $imageAnnonce)
                   {
                       var_dump($imageAnnonce->getFile());
                       if($imageAnnonce->getFile() != null)
                       {
                           $imageAnnonce->setAnnonce($annonce);
                           $imageAnnonce->upload();
                       }
                   }   
                }
                
                
                /*
                gerer controle insertion image ici malgré le controle plus haut
                supprimer image quand pas d upload
                */
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($annonce);
                $entityManager->flush();
                return $this->redirect($this->generateUrl('locazik_annonce_confirmer'));
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Annonce:creer.html.twig', array('form' => $form->createView()));
    }
    
    
    // ADMINISTRATION
    // Permet de passer une annonce online/offline
    public function validerAnnonceAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $annonce = $annonceRepository->find($id);
        
        $form = $this->createForm(new AnnonceValidationType(), $annonce);
        
        $request = $this->get('request');
        
        if($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($annonce);
                //$entityManager->persist($image);
                $entityManager->flush();
                return $this->redirect($this->generateUrl('locazik_annonce_lister'));
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Annonce:validation.html.twig', array('form' => $form->createView()));
    }
    
    public function listerAnnonceAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $listeAnnonces = $annonceRepository->findAll();
        
        return $this->render('LocazikAnnonceBundle:Annonce:lister.html.twig', array('listeAnnonces' => $listeAnnonces));
    }
    
    public function detailAnnonceAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $annonce = $annonceRepository->find($id);
        
        //var_dump(count($annonce->getImageAnnonces()));
        return $this->render('LocazikAnnonceBundle:Annonce:detail.html.twig', array('annonce' => $annonce));
    }
    
    public function supprimerAnnonceAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $annonce = $annonceRepository->find($id);
        
        $entityManager->remove($annonce);
        $entityManager->flush();
        
        return $this->render('LocazikAnnonceBundle:Annonce:listeAnnonces.html.twig');
    }
    
    public function confirmerCreationAnnonceAction()
    {
        return $this->render('LocazikAnnonceBundle:Annonce:confirmerCreation.html.twig');
    }
    
}