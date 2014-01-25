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
        $data = $event->getData();
        $form = $event->getForm();
 
        //est declanché a la creation du formulaire!
         
        //presetdata peut donc avoir deux types de valeurs: NULL (dans le cadre d'une création, le type de materiel n'est pas selectionné!, on ne peut donc pas remplir le select avec les valeurs appropriées!)
        //la solution serait donc d'allouer une valeur par défaut à "type de matériel" pour ne pas nous retrouver dans le cas ou notre select ne serait pas initialisé, donc erreur au rendu TWIG qui attend une variable!
        if($data === null)
        {
            return;
        }
        else
        {
            //si Data n'est pas null, on est donc dans le cas d'une modification ou d'un affichage, il nous faut  récupérer le contenu de notre select "type de materiel" pour remplir de valeurs le second!
            //Je rappel que Data nous renvoie l'entité "Materiel" dont l'attribut typeMateriel pointe vers l'entité TypeDeMateriel d'ou la ligne suivante qui permet tout simplement de récupérer toutes les entitées Vis par exemple
 
           /* $materiels = $this->entityManager->getRepository('LocazikAnnonceBundle:Departement')->findAll();
            
            foreach($materiels as $materiel)
            {
                $choices[$materiel->getIdCode()] = $materiel->getCode();
            }
            $form->add($this->factory->createNamed('choice','valeur','valeur', array('choices' => $choices)));*/
        }
     
    }
     
     
    public function preBind(FormEvent $event)
    {
        
        $data = $event->getData();
        if(isset($data['imageAnnonces'])){
            foreach($data['imageAnnonces'] as $image){
                if($image['file'] == null){
                    array_shift($data['imageAnnonces']);
                }
            }
            if(count($data['imageAnnonces'] <= 0))
            {
                $event->getForm()->get('imageAnnonces')->setData(null);
            }
        }
        
        $depId = $data['departement'];
        $departement = $this->entityManager->getRepository('LocazikAnnonceBundle:Departement')->find($depId);
        if($departement != null)
        {
            $event->getForm()->get('departement')->setData($departement);
        }
        //var_dump($event->getForm()->get('imageAnnonces'));exit();
        $cp = $data['annonceCp'];
        /*if (!empty($cp))
        {
            if(substr($cp, 0, 2) != $depId)
            {
                $errorMsg = "Le code postal ne correspond pas au département sélectionné";
                $event->getForm()->get('annonceCp')->addError(new FormError($errorMsg));
            }
        }*/
    }
    
    public function postBind(FormEvent $event)
    {
        
    }
     
}