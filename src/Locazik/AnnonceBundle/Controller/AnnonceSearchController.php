<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Form\Type\AnnonceSearchType;

class AnnonceSearchController extends Controller
{
    public function searchBarAction($data, $region, $nbAnnonces)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $listeCategories = $this->get('categorie_service')->listerCategorieService($entityManager);
        
        $form = $this->createForm(new AnnonceSearchType($entityManager, $listeCategories));

        return $this->render('LocazikAnnonceBundle:Common:searchBar.html.twig', 
                                    array('form' => $form->createView(), 
                                            'data' => $data, 
                                            'region' => $region, 
                                            'nbAnnonces' => $nbAnnonces));
    }
}