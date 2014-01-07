<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Form\CategorieType;

class CategorieController extends Controller
{
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categorieRepository = $entityManager->getRepository('LocazikAnnonceBundle:Categorie');
        $listeCategories = $categorieRepository->findAll();
        return $this->render('LocazikAnnonceBundle:Categorie:index.html.twig', array('listeCategories' => $listeCategories));
    }
    
    public function gererCategorieAction($id = null)
    {
        $entityManager = $this->getDoctrine()->getManager();     
        if($id)
        {           
            $categorieRepository = $entityManager->getRepository('LocazikAnnonceBundle:Categorie');
            $categorie = $categorieRepository->find($id);
            $categorie->setDateUpdate(new \Datetime());
        }
        else
        {
            $categorie = new Categorie();
        }
        
        // Génération formulaire
        $form = $this->createForm(new CategorieType(), $categorie);
        
        $request = $this->get('request');
        
        if ($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if(!$categorie->getCategorieParentId())
            {
                $categorie->setCategorieParentId(0);
            }
            
            if($form->isValid())
            {
                $entityManager->persist($categorie);
                $entityManager->flush();
                return $this->redirect( $this->generateUrl('locazik_categorie_detail', array('id' => $categorie->getId())) );   
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Categorie:gerer.html.twig', array('form' => $form->createView()));
        
    }
    
    public function detailCategorieAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categorieRepository = $entityManager->getRepository('LocazikAnnonceBundle:Categorie');
        $categorie = $categorieRepository->find($id);
        
        if($categorie->getCategorieParentId() !== 0)
        {
            $parentCategorie = $categorieRepository->find($categorie->getCategorieParentId());
            $categorie->setCategorieParentName($parentCategorie->getCategorieName());
        }
        else
        {
            $categorie->setCategorieParentName('Aucune');
        }
        
        return $this->render('LocazikAnnonceBundle:Categorie:detail.html.twig', array('categorie' => $categorie));
    }
}
