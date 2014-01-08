<?php

namespace Locazik\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('annonceName', 'text')
            ->add('annonceDesc', 'textarea')
            ->add('annoncePrix', 'text')
            ->add('annonceCp', 'text')
            ->add('categorie', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Categorie',
                  'property' => 'categorieName',
                  'multiple' => false))
            ->add('imageAnnonces', 'collection', 
                    array('type' => new ImageAnnonceType(),
                        'allow_add'    => true, 
                        'allow_delete' => true))
        ;
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
