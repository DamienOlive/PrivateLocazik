<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Form\Type\CategorieType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategorieController extends Controller
{    
    public function listerCategorieAction()
    {
        //$listeCategories = $this->get('categorie_manager')->findCategoriesOrderbyParent();
        $listeCategoriesParent = $this->get('categorie_manager')->findListBy(array('parent' => null));
        return $this->render('LocazikAnnonceBundle:Categorie:listerAdmin.html.twig', 
                                            array('listeCategoriesParent' => $listeCategoriesParent));
    }
    
    public function ajaxSupprimerCategorieAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax && $id != null)
        {
            $response = false;
            $categorie = $this->get('categorie_manager')->loadCategorie($id);
            if($categorie)
            {
                $this->get('categorie_manager')->removeCategorie($categorie);
                $response = true;
            }
            return new JsonResponse($response);
        }
    }
    
    public function ajaxUpdateOnlineValueCategorieAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        $online = $this->get('request')->request->get('isOnline', true);
        $onlineValue = $online === 'true'? true: false;
        if($isAjax && $id != null)
        {
            $result = false;
            $categorie = $this->get('categorie_manager')->loadCategorie($id);
            if($categorie)
            {
                $categorie->setIsOnline($onlineValue);
                $this->get('categorie_manager')->saveCategorie($categorie);
                $result = true;
            }
            return new JsonResponse($result);
        }
    }
    
    public function gererCategorieAction($id = null)
    {
        if($id)
        {           
            $categorie = $this->get('categorie_manager')->loadCategorie($id);
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
                if($categorie->getParent())
                {
                    $categorieUrl = $toolBox::filter($categorie->getParent()->getCategorieUrl().'-'.$categorieName);
                }
                else
                {
                    $categorieUrl = $toolBox::filter($categorieName);
                }
                $categorie->setCategorieUrl($categorieUrl);
                $categorie->setCategorieName(ucfirst($categorieName));
                $this->get('categorie_manager')->saveCategorie($categorie);
                return $this->redirect( $this->generateUrl('locazik_admin_categorie_detail', array('id' => $categorie->getId())) );   
            }
        }
        return $this->render('LocazikAnnonceBundle:Categorie:gererAdmin.html.twig', 
                                array('form' => $form->createView(), 'categorie' => $categorie));
    }
    
    public function detailCategorieAction($id)
    {
        $categorie = $this->get('categorie_manager')->loadCategorie($id);
        return $this->render('LocazikAnnonceBundle:Categorie:detailAdmin.html.twig', array('categorie' => $categorie));
    }
}
