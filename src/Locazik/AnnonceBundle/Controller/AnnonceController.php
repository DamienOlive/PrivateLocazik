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
                foreach($imageAnnonces as $imageAnnonce)
                {
                    $imageAnnonce->upload();
                }
                
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($annonce);
                //$entityManager->persist($image);
                $entityManager->flush();
                return $this->render('LocazikAnnonceBundle:Annonce:confirmationCreation.html.twig');
            }
        }
        
        /*
        $annonce->setAnnonceName('Location de guitare fender');
        $annonce->setAnnonceDesc('Cette guitare est vraiment superbe, je vous la conseille vivement!');
        $annonce->setAnnoncePrix(19.70);
        $annonce->setAnnonceCp('66180');
        
        // TODO : Upload fichier + traitement
        $image = new ImageAnnonce();
        $image->setImageName('temp.jpg');
        
        $annonce->addImageAnnonce($image);
        */
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
                return $this->render('LocazikAnnonceBundle:Annonce:listeAnnonces.html.twig');
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Annonce:validation.html.twig', array('form' => $form->createView()));
    }
    
}