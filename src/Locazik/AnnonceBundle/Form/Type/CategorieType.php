<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CategorieType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parent', 'entity', array(
              'class'    => 'LocazikAnnonceBundle:Categorie',
              'property' => 'categorieName',
              'empty_data'  => null,
              'empty_value' => "Aucune",
              'label' => 'Catégorie parente :',
              'required' => false))
            ->add('categorieName', 'text', array('label' => 'Nom :'))
            ->add('categorieDesc', 'textarea', array('label' => 'Description :'))
            ->add('isOnline', 'checkbox', array('required' => false, 'label' => 'Mettre en ligne :'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Locazik\AnnonceBundle\Entity\Categorie'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_categorie';
    }
}
