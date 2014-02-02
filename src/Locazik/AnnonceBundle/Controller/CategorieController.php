<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Form\Type\CategorieType;
use Symfony\Component\HttpFoundation\Response;

class CategorieController extends Controller
{
    public function listerCategorieService($entityManager)
    {
        $listeParentCategories = $entityManager->getRepository('LocazikAnnonceBundle:Categorie')
                                               ->listeCategorieOnline();
        
        $listeCategorieOptions = array();
        foreach($listeParentCategories as $parentCategorie){
            foreach($parentCategorie->getChildren() as $child){
                $listeCategorieOptions[$parentCategorie->getCategorieName()][$child->getId()] = $child->getCategorieName();
            }
        }
        //var_dump($listeCategorieOptions);exit();
        return $listeCategorieOptions;
    }
    
    public function listerCategorieAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $categorieRepository = $entityManager->getRepository('LocazikAnnonceBundle:Categorie');
        $listeCategories = $categorieRepository->categoriesOrderbyParent();
        
        return $this->render('LocazikAnnonceBundle:Categorie:lister.html.twig', array('listeCategories' => $listeCategories));
    }
    
    public function ajaxSupprimerCategorieAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax)
        {
            if($id != null)
            {
                $entityManager = $this->getDoctrine()->getManager();
                $categorieRepository = $entityManager->getRepository('LocazikAnnonceBundle:Categorie');
                $categorie = $categorieRepository->find($id);
                $entityManager->remove($categorie);
                $entityManager->flush();
                
                $response = new Response(json_encode(array('result' => 'success')));
            }
            else
            {
                $response = new Response(json_encode(array('result' => 'failure')));
            }
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }    
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
        
        $form = $this->createForm(new CategorieType(), $categorie);
        $request = $this->get('request');
        
        if ($request->getMethod() === 'POST')
        {
            $form->bind($request);
            
            if($form->isValid())
            {
                $toolBox = $this->get('urlify_helper');
                $categorieName = $categorie->getCategorieName();
                $categorieUrl = $toolBox::filter($categorie->getParent()->getCategorieUrl().'-'.$categorieName);
                $categorie->setCategorieUrl($categorieUrl);
                $categorie->setCategorieName(ucfirst($categorieName));
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
        
        return $this->render('LocazikAnnonceBundle:Categorie:detail.html.twig', array('categorie' => $categorie));
    }
}
