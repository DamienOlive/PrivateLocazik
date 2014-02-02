<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class GeoController extends Controller
{
    public function listerRegionAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->getRepository('LocazikAnnonceBundle:Region')->listeRegionOrderBy();
        $listeRegions = $query->getQuery()->getResult();
        return $this->render('LocazikAnnonceBundle:Geo:listeRegionHomePage.html.twig', array('listeRegions' => $listeRegions));
    }
    
    public function ajaxListeRegionAction()
    {
        
    }
    
    /**
     * Retourne la liste des villes + cp correspondant
     * à l'info donnée en paramètre
     */
    public function ajaxListeCpVilleAction($finder)
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        if($isAjax)
        {
            $listeVilles = null;
            $entityManager = $this->getDoctrine()->getManager();
            $villeRepository = $entityManager->getRepository('LocazikAnnonceBundle:Ville');
            if(is_numeric($finder) && strlen($finder) <= 5)
            {
                if(strlen($finder) === 5)
                {
                    $listeVilles = $villeRepository->listeVillesFromFullCp($finder);
                } 
                else
                {
                    $listeVilles = $villeRepository->listeVillesFromPartialCp($finder);
                }
            }
            else
            {
                $listeVilles = $villeRepository->listeVillesFromPartialName($finder);
            }
            
            if($listeVilles !== null)
            {
                $response = new Response(json_encode(array('result' => 'success', 'data' => $listeVilles)));
            }
            else
            {
                $response = new Response(json_encode(array('result' => 'failure')));
            }

            //exit();
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }
        
    }
    
    public function ajaxListeDepFromRegionAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('idRegion');
        if($isAjax)
        {
            if($id != null)
            {
                $entityManager = $this->getDoctrine()->getManager();
                
                $regionRepository = $entityManager->getRepository('LocazikAnnonceBundle:Region');
                $region = $regionRepository->find($id);
                $listeDepartements = $region->getDepartements();
                $result = array();
                foreach($listeDepartements as $departement)
                {
                    array_push($result, array('id' => $departement->getId(), 'departement' => $departement->getNomdepartement()));
                }
                $response = new Response(json_encode(array('result' => 'success', 'data' => $result)));
            }
            else
            {
                $response = new Response(json_encode(array('result' => 'failure')));
            }
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }
    
    public function villeCpExtractService($entityManager, $villeCp)
    {
        $ville = null;
        if($villeCp)
        {
            $splitedCp = explode('-', $villeCp);
            if(is_numeric(trim($splitedCp[0])))
            {
                $cpNum = trim($splitedCp[0]);
                array_shift($splitedCp);
                $nomVille = trim(implode('-', $splitedCp));
                $ville = $entityManager->getRepository('LocazikAnnonceBundle:Ville')->findVille($cpNum, $nomVille);
            }
        }
        return $ville;
    }
    
    
    
    
    
    
    
    
    /**
     * TOOLS
     * Permet de générer le champ ville et dep url
     */
    
    public function genereDepUrlAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $listeDep = $entityManager->getRepository('LocazikAnnonceBundle:Departement')->findAll();
        $toolBox = $this->get('urlify_helper');
        foreach($listeDep as $dep)
        {
            $depUrl = $toolBox::filter($dep->getNomdepartement());
            $dep->setUrldepartement($depUrl);
            $entityManager->persist($dep);
        }
        $entityManager->flush();
    }
    
    public function genereVilleUrlAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        for($i = 1; $i <= 10; $i++){
            $dep = $entityManager->getRepository('LocazikAnnonceBundle:Departement')->find($i);
            if($dep !== null)
            {
                $listeVilles = $dep->getVilles();
                $toolBox = $this->get('urlify_helper');
                foreach($listeVilles as $ville)
                {
                    $depUrl = $toolBox::filter($ville->getCp().'-'.$ville->getNom());
                    //var_dump('test');
                    $ville->setVilleurl($depUrl);
                    $entityManager->persist($ville);
                }
                $entityManager->flush();
            }
            else
            {
                var_dump($i.PHP_EOL);
            }
        }
        exit();
    }
    
    
    
    
}