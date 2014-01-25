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
    
    public function ajaxListeVilleFromDepAction()
    {
        
    }
}