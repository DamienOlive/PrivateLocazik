<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Entity\Annonce;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;
use Locazik\AnnonceBundle\Form\Type\AnnonceType;
use Locazik\AnnonceBundle\Form\Type\AnnonceValidationType;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{
    public function indexAction()
    {
        $annonceManager = $this->get('annonce_manager');
        $data['nbAnnoncesOnline'] = $annonceManager->countAnnonces();
        $data['nbAnnoncesOffline'] = $annonceManager->countAnnonces(false);
        
        // A faire fonctionner, requete filter par jour en doctrine
        //$data['nbAnnoncesToday'] = $annonceManager->countAnnoncesByDay();
        $data['nbAnnoncesToday'] = 0;
        return $this->render('LocazikAnnonceBundle:Admin:layout.html.twig', array('data' => $data));
    }
            
}