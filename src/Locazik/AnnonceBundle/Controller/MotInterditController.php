<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Locazik\AnnonceBundle\Entity\MotInterdit;
use Locazik\AnnonceBundle\Form\Type\MotInterditType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

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
                $this->get('mot_interdit_manager')->saveMotInterdit($motInterdit);
            }
            return $this->redirect($this->generateUrl('locazik_admin_motinterdit_lister'));
        }
        return $this->render('LocazikAnnonceBundle:MotInterdit:creerAdmin.html.twig', array('form' => $form->createView()));
    }

    public function listerMotAction()
    {
        $listeMotsInterdits = $this->get('mot_interdit_manager')->findAll();
        return $this->render('LocazikAnnonceBundle:MotInterdit:listerAdmin.html.twig', array('listeMotsInterdits' => $listeMotsInterdits));
    }

    public function ajaxSupprimerMotAction()
    {
        $isAjax = $this->get('request')->isXMLHttpRequest();
        $id = $this->get('request')->request->get('id');
        if($isAjax && $id != null)
        {
            $response = false;
            $motInterdit = $this->get('mot_interdit_manager')->loadMotInterdit($id);
            if($motInterdit)
            {
                $this->get('mot_interdit_manager')->removeMotInterdit($motInterdit);
                $response = true;
            }
            return new JsonResponse($response);
        }
    }
}
