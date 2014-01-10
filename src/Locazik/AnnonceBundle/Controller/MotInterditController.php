<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\MotInterdit;
use Locazik\AnnonceBundle\Form\MotInterditType;

class MotInterditController extends Controller
{
    public function creerMotAction()
    {
        $motInterdit = new MotInterdit();
        $form = $this->createForm(new MotInterditType(), $motInterdit);
        
        $request = $this->get('request');
        if($request->getMethod() === 'POST')
        {
            $form->bind($request);
            if($form->isValid())
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($motInterdit);
                $entityManager->flush();
            }
            return $this->redirect($this->generateUrl('locazik_mot_lister'));
            //$this->render('LocazikAnnonceBundle:MotInterdit:liste.html.twig', array('listeMotsInterdits' => $listeMotsInterdits));
        }
        return $this->render('LocazikAnnonceBundle:MotInterdit:creer.html.twig', array('form' => $form->createView()));
    }

    public function listerMotAction()
    {
        $listeMotsInterdits = $this->getListeMotsInterdits();
        return $this->render('LocazikAnnonceBundle:MotInterdit:liste.html.twig', array('listeMotsInterdits' => $listeMotsInterdits));
    }

    public function supprimerMotAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $motInterditRepository = $entityManager->getRepository('LocazikAnnonceBundle:MotInterdit');
        $motInterdit = $motInterditRepository->find($id);
        $entityManager->remove($motInterdit);
        $entityManager->flush();
        
        return $this->redirect($this->generateUrl('locazik_mot_lister'));
        //return $this->render('LocazikAnnonceBundle:MotInterdit:liste.html.twig', array('listeMotsInterdits' => $listeMotsInterdits));        
    }

    private function getListeMotsInterdits()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $motInterditRepository = $entityManager->getRepository('LocazikAnnonceBundle:MotInterdit');
        return $motInterditRepository->findAll();
    }
}
