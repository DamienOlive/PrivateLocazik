<?php

namespace Locazik\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LocazikAnnonceBundle::home.html.twig');
    }
}
