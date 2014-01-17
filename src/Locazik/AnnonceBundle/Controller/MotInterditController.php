<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\MotInterdit;
use Locazik\AnnonceBundle\Form\Type\MotInterditType;
use Symfony\Component\HttpFoundation\Response;

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
        }
        return $this->render('LocazikAnnonceBundle:MotInterdit:creer.html.twig', array('form' => $form->createView()));
    }

    public function listerMotAction()
    {
        $listeMotsInterdits = $this->getListeMotsInterdits();
        return $this->render('LocazikAnnonceBundle:MotInterdit:lister.html.twig', array('listeMotsInterdits' => $listeMotsInterdits));
    }

    public function ajaxSupprimerMotAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax)
        {
            if($id != null)
            {
                $entityManager = $this->getDoctrine()->getManager();
                $motInterditRepository = $entityManager->getRepository('LocazikAnnonceBundle:MotInterdit');
                $motInterdit = $motInterditRepository->find($id);
                $entityManager->remove($motInterdit);
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

    private function getListeMotsInterdits()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $motInterditRepository = $entityManager->getRepository('LocazikAnnonceBundle:MotInterdit');
        return $motInterditRepository->findAll();
    }
}
