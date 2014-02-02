<?php

namespace Locazik\AnnonceBundle\Form\Listener;

use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormError;
use Doctrine\ORM\EntityManager;

class GeoDataListener implements EventSubscriberInterface
{
    private $factory;
    private $entityManager;
 
    public function __construct(FormFactoryInterface $factory,EntityManager $em)
    {
        $this->factory = $factory;
        $this->entityManager = $em;
         
    }
 
    public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA => 'preSetData',
            FormEvents::PRE_BIND => 'preBind',
            FormEvents::POST_BIND => 'postBind'
        );
    }
 
    public function preSetData(FormEvent $event)
    {
    
    }
     
     
    public function preBind(FormEvent $event)
    {
        /*$data = $event->getData();
        
        $depId = $data['departement'];
        $departement = $this->entityManager->getRepository('LocazikAnnonceBundle:Departement')->find($depId);
        if($departement != null)
        {
            $event->getForm()->get('departement')->setData($departement);
        }*/
    }
    
    public function postBind(FormEvent $event)
    {
        $form = $event->getForm();
        $villeCp = $form->get('annonceCpWorkField')->getData();
        if (!empty($villeCp))
        {
            //$ville = $this->container->get('geo_service')->listerCategorieService($this->entityManager, $villeCp);
            
            $splitedCp = explode('-', $villeCp);
            if(is_numeric(trim($splitedCp[0])))
            {
                $cpNum = trim($splitedCp[0]);
                array_shift($splitedCp);
                $nomVille = trim(implode('-', $splitedCp));
                $ville = $this->entityManager->getRepository('LocazikAnnonceBundle:Ville')->findVille($cpNum, $nomVille);
                if(!$ville || count($ville ) <= 0)
                {
                    $errorMsg = 'Aucun code postal/ville ne correspond à votre saisie';
                    $event->getForm()->get('annonceCpWorkField')->addError(new FormError($errorMsg));
                }
            }
        }
    }
     
}