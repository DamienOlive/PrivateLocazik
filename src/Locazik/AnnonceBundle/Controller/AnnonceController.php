<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Entity\Annonce;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;
use Locazik\AnnonceBundle\Form\Type\AnnonceType;
use Locazik\AnnonceBundle\Form\Type\AnnonceValidationType;
use Symfony\Component\HttpFoundation\Response;

class AnnonceController extends Controller
{
    public function indexAction()
    {
        
    }
    
    public function creerAnnonceAction()
    {
        $annonce = new Annonce();
        $entityManager = $this->getDoctrine()->getManager();
        
        $listeCategories = $this->get('categorie_service')->listerCategorieService($entityManager);
        $form = $this->createForm(new AnnonceType($entityManager, $listeCategories), $annonce);
        
        $request = $this->get('request');
        
        if($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $ville = $this->get('geo_service')->villeCpExtractService($entityManager, $annonce->getAnnonceCpWorkField());
                if($ville !== null)
                {
                    $annonce->setVille($ville)
                            ->setDepartement($ville->getDepartement())
                            ->setRegion($ville->getDepartement()->getRegion());

                    $imageAnnonces = $annonce->getImageAnnonces();

                    // possibilité d'upload plusieurs fichiers
                    if($imageAnnonces != null)
                    {
                        foreach($imageAnnonces as $imageAnnonce)
                        {
                            $imageAnnonce->setAnnonce($annonce);
                            $imageAnnonce->upload();
                        }   
                    }


                    /*
                    gerer controle insertion image ici malgré le controle plus haut
                    supprimer image quand pas d upload
                    */

                    $entityManager->persist($annonce);
                    $entityManager->flush();
                    return $this->redirect($this->generateUrl('locazik_user_login_before_confirm', 
                                                                array('annonceKey' => $annonce->getAnnonceKey())));
                }
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Annonce:creer.html.twig', array('form' => $form->createView()));
    }
    
    public function listerAnnonceAction($categorieUrlName, $regionUrlName = null, $depUrlName = null, $villeUrlName = null)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $listeAnnonces = null;
        $data = array();
        
        $categorie = $entityManager->getRepository('LocazikAnnonceBundle:Categorie')
                                                    ->findOneBy(array('categorieUrl' => $categorieUrlName));
        
        if($categorie)
        {
            $data['categorieValue'] = $categorie->getId();
        }
        
        if($villeUrlName && !empty($villeUrlName))
        {
            $ville = $this->get('geo_service')->villeCpExtractService($entityManager, $villeUrlName);
            if($ville)
            {
                $data['ville'] = $ville->getId();
                $region = $ville->getDepartement()->getRegion();
                $data['villeValue'] = $ville->getCp().' - '.$ville->getNom();
            }
        }
        elseif($depUrlName && !empty($depUrlName))
        {
            $departement = $entityManager->getRepository('LocazikAnnonceBundle:Departement')
                                                    ->findOneBy(array('urldepartement' => $depUrlName));
            if($departement)
            {
                $data['departement'] = $departement->getId();
                $region = $departement->getRegion();
            }
        }
        elseif($regionUrlName && !empty($regionUrlName))
        {
            $region = $entityManager->getRepository('LocazikAnnonceBundle:Region')
                                                    ->findOneBy(array('urlregion' => $regionUrlName));
            if($region)
            {
                $data['region'] = $region->getId();
            }
        }
        
        $request = $this->get('request');
        
        $keyword = $request->query->get('kw');
        $orderBy = $request->query->get('orderBy');
        $currentPage = $request->query->get('page', 1);
        
        $query = $entityManager->getRepository('LocazikAnnonceBundle:Annonce')->listeAnnonceOnline($data, $categorie, $keyword, $orderBy);
        $paginator  = $this->get('knp_paginator');
        $listeAnnonces = $paginator->paginate(
            $query,
            $currentPage/*page number*/,
            $this->container->getParameter('nbAnnoncePerPage')/*limit per page*/
        );
        
        // TODO traiter quand 0 annonces -> retourner TOUTES les annonces
        if($request->getMethod() === 'POST')
        {
            $data = $this->getRequest()->request->get('locazik_annoncebundle_rechercheannonces');
            return $this->genereAnnonceListeUrl($data);
        }
        
        
        /**
         * A SUPPRIMER
         */
        $region = $entityManager->getRepository('LocazikAnnonceBundle:Region')->find(1);
        return $this->render('LocazikAnnonceBundle:Annonce:lister.html.twig', 
                array('region' => $region, 'listeAnnonces' => $listeAnnonces, 'data' => $data));
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
    
    public function listerAnnonceAdminAction()
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
    
    public function insertUserAnnonceService($entityManager, $annonceKey, $user)
    {
        $annonceRepository = $entityManager->getRepository('LocazikAnnonceBundle:Annonce');
        $annonce = $annonceRepository->findOneBy(array('annonceKey' => $annonceKey));
        
        if($annonce !== null)
        {
            $annonce->setUser($user);
            $entityManager->persist($annonce);
            $entityManager->flush();
            return true;
        }
        return false;
    }
    
    private function genereAnnonceListeUrl($data)
    {
        $ville = null;
        $departement = null;
        $region = null;
        $response = null;
        $keyword = null;
        $entityManager = $this->getDoctrine()->getManager();
        $categorie = $entityManager->getRepository('LocazikAnnonceBundle:Categorie')->find($data['categorie']);
        $categorieName = 'toutes';
        
        if($categorie)
        {
            $categorieName = $categorie->getCategorieUrl();
        }
        
        if($data)
        {
            if(isset($data['keyword']) && !empty($data['keyword']))
            {
                $keyword = $data['keyword'];
            }
            
            if(isset($data['ville']) && !empty($data['ville']))
            {
                $ville = $this->get('geo_service')->villeCpExtractService($entityManager, $data['ville']);
                if($ville)
                {
                    $response = $this->generateUrl('locazik_annonce_listerFiltre',array(
                        'categorieUrlName' => $categorieName, 
                        'regionUrlName' => $ville->getDepartement()->getRegion()->getUrlregion(), 
                        'depUrlName' => $ville->getDepartement()->getUrldepartement(),
                        'villeUrlName' => $ville->getVilleurl(),
                        'kw' => $keyword));
                }
            }
            
            if(isset($data['departement']) && is_numeric($data['departement']) && !$ville)
            {
                $departement = $entityManager->getRepository('LocazikAnnonceBundle:Departement')->find($data['departement']);
                if($departement)
                {
                    $response = $this->generateUrl('locazik_annonce_listerFiltre',array(
                        'categorieUrlName' => $categorieName, 'regionUrlName' => $departement->getRegion()->getUrlregion(), 
                        'depUrlName' => $departement->getUrldepartement(), 'kw' => $keyword));
                }
            }
            
            if(isset($data['region']) && is_numeric($data['region']) && !$departement)
            {
                $region = $entityManager->getRepository('LocazikAnnonceBundle:Region')->find($data['region']);
                if($region)
                {
                    $response = $this->generateUrl('locazik_annonce_listerFiltre',array(
                        'categorieUrlName' => $categorieName, 'regionUrlName' => $region->getUrlregion(),
                        'kw' => $keyword));
                }
            }
            
            if(!$departement && !$region && !$ville)
            {
                $response = $this->generateUrl('locazik_annonce_listerFiltre',array(
                        'categorieUrlName' => $categorieName, 'kw' => $keyword));
            }
        }
        
        return $this->redirect($response);
    }
    
    public function ajaxGetNumeroTelAnnonceAction($annonceKey)
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        if($isAjax && $annonceKey)
        {
            $annonce = $this->getDoctrine()->getManager()->getRepository('LocazikAnnonceBundle:Annonce')
                                                                ->findOneBy(array('annonceKey' => $annonceKey));
            if($annonce !== null)
            {
                $tel = $annonce->getNumeroTel();
                $response = new Response(json_encode(array('result' => 'success', 'numTel' => $tel)));
            }
            else
            {
                $response = new Response(json_encode(array('result' => 'success')));
            }
            
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
    }
    
}