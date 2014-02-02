<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Locazik\AnnonceBundle\Form\Listener;

class AnnonceSearchType extends AbstractType
{
    
    private $entityManager;
    private $listeCategories;
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, array $listeCategories)
    {
        $this->entityManager = $entityManager;
        $this->listeCategories = $listeCategories;
    }
    
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new \Locazik\AnnonceBundle\Form\DataTransformer\IntToCategorieTransformer($this->entityManager);
        
        $builder
            ->add('keyword', 'text', array('label' => false, 'attr' => array(
                  'placeholder' => 'mot(s) clé(s)'),
                  'required' => false))
            ->add($builder->create('categorie', 'choice', array(
                    'label' => false, 
                    'choices' => $this->listeCategories, 
                    'empty_value' => 'Toutes les catégories',
                    'required' => false))
                  ->addModelTransformer($transformer))
            ->add('region', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Region',
                  'property' => 'nomRegion',
                  'query_builder' => function(\Locazik\AnnonceBundle\Entity\Repository\GeoRepository $r) {
                      return $r->listeRegionOrderBy();
                  },
                  'label' => false,
                  'required' => false,
                  'attr' => array('onchange' => 'listeDepFromRegion(this.value, "'.$this->getName().'");')))
            ->add('departement', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Departement',
                  'choices' => array(),
                  'required' => false,
                  'empty_value' => 'Veuillez choisir une région',
                  'label' => false,
                  'property' => 'nomDepartement'))
            ->add('ville', 'text', array(
                  'attr' => array('class'=>'autocompleteCpAnnonceCreation'),
                  'required' => false));
                  
        $listener = new \Locazik\AnnonceBundle\Form\Listener\GeoDataListener($builder->getFormFactory(),$this->entityManager);
        $builder->addEventSubscriber($listener);   
    }
    
    public function getName()
    {
        return 'locazik_annoncebundle_rechercheannonces';
    }
}