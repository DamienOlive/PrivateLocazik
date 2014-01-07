<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Entity\Annonce;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        
    }
    
    public function creerAnnonce()
    {
        $entityManager = $this->getDoctrine()->getManager();
        
        $annonce = new Annonce();
        $annonce->setAnnonceName('Location de guitare fender');
        $annonce->setAnnonceDesc('Cette guitare est vraiment superbe, je vous la conseille vivement!');
        $annonce->setAnnoncePrix(19.70);
        $annonce->setAnnonceCp('66180');
        
        // TODO : Upload fichier + traitement
        $image = new ImageAnnonce();
        $image->setImageName('temp.jpg');
        
        $annonce->addImageAnnonce($image);
        
        $entityManager->persist($annonce);
        $entityManager->persist($image);
        $entityManager->flush();
        
    }
    
    
    // ADMINISTRATION
    // Permet de passer une annonce online/offline
    public function validerAnnonceAction($id, $isValid)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $annonce = $annonceRepository->find($id);
        
        $annonce->setIsOnline($isValid);
        $entityManager->persist($annonce);
        $entityManager->flush();
    }
    
}