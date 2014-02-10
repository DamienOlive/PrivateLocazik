<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\Categorie;
use Locazik\AnnonceBundle\Entity\Annonce;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AnnonceAdminController extends Controller
{
    public function listerAnnonceAction()
    {
        $listeAnnonces = $this->get('annonce_manager')->findAll();
        return $this->render('LocazikAnnonceBundle:Annonce:listerAdmin.html.twig', array('listeAnnonces' => $listeAnnonces));
    }
    
    public function listerAnnonceOfflineAction()
    {
        $listeAnnonces = $this->get('annonce_manager')->findAllBy(array('isOnline' => false));
        $OfflinePage = true;
        return $this->render('LocazikAnnonceBundle:Annonce:listerAdmin.html.twig', 
                                array('listeAnnonces' => $listeAnnonces, 'offlinePage' => $OfflinePage));
    }
    
    public function ajaxSupprimerAnnonceAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax && $id != null)
        {
            $result = false;
            $annonce = $this->get('annonce_manager')->loadAnnonce($id);
            if($annonce)
            {
                $this->get('annonce_manager')->removeAnnonce($annonce);
                $result = true;
            }
            return new JsonResponse($result);
        }
    }
    
    public function ajaxSupprimerImageAnnonceAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax && $id != null)
        {
            $result = false;
            $imageAnnonce = $this->get('image_annonce_manager')->loadImageAnnonce($id);
            if($imageAnnonce)
            {
                $this->get('image_annonce_manager')->removeImageAnnonce($imageAnnonce);
                $result = true;
            }
            return new JsonResponse($result);
        }
    }
    
    public function ajaxUpdateOnlineValueAnnonceAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        $online = $this->get('request')->request->get('isOnline', true);
        $onlineValue = $online === 'true'? true: false;
        if($isAjax && $id != null)
        {
            $result = false;
            $annonce = $this->get('annonce_manager')->loadAnnonce($id);
            if($annonce)
            {
                $annonce->setIsOnline($onlineValue);
                $this->get('annonce_manager')->saveAnnonce($annonce);
                $result = true;
            }
            return new JsonResponse($result);
        }
    }

    public function modifierAnnonceAction($id)
    {
        $annonce = $this->get('annonce_manager')->loadAnnonce($id);
        $em = $this->getDoctrine()->getManager();
        $listeCategories = $this->get('categorie_manager')->findListeCategorieOnline();
        $form = $this->createForm(new \Locazik\AnnonceBundle\Form\Type\AnnonceEditAdminType($em, $listeCategories), $annonce);
        
        $request = $this->get('request');
        
        if($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $this->get('annonce_manager')->saveAnnonce($annonce);
                return $this->redirect($this->generateUrl('locazik_admin_annonce_lister'));
            }
        }
        
        return $this->render('LocazikAnnonceBundle:Annonce:validationAdmin.html.twig', 
                            array('form' => $form->createView(), 'annonce' => $annonce));
    }
}