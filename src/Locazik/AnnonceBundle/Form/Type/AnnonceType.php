<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Locazik\AnnonceBundle\Form\Listener;

class AnnonceType extends AbstractType
{
    private $entityManager;
    private $listeCategories;
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager, array $listeCategories)
    {
        $this->entityManager = $entityManager;
        $this->listeCategories = $listeCategories;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new \Locazik\AnnonceBundle\Form\DataTransformer\IntToCategorieTransformer($this->entityManager);
        
        $builder
            ->add('annonceCpWorkField', 'text', array(
                  'attr' => array('class'=>'autocompleteCpAnnonceCreation')))
            ->add($builder->create('categorie', 'choice', array('label' => 'Catégorie :','choices' => $this->listeCategories))
                  ->addModelTransformer($transformer))
            ->add('numeroTel', 'text', array('label' => 'Numéro de téléphone :'))
            ->add('annonceName', 'text', array('label' => 'Titre de l\'annonce :'))
            ->add('annonceDesc', 'textarea', array('label' => 'Texte de l\'annonce :'))
            ->add('annoncePrix', 'text', array('label' => 'Prix à la journée :'))
            ->add('imageAnnonces', 'collection', 
                    array('type' => new ImageAnnonceType(),
                        'allow_add'    => true, 
                        'allow_delete' => true,
                        'label' => 'Photos : Une annonce avec photo est 8 fois plus consultée qu\'une annonce sans photo'))
        ;
                  
        $listener = new \Locazik\AnnonceBundle\Form\Listener\GeoDataListener($builder->getFormFactory(),$this->entityManager);
        $builder->addEventSubscriber($listener);
        
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Locazik\AnnonceBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_annonce';
    }
}
