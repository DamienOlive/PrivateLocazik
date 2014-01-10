<?php

namespace Locazik\AnnonceBundle\Form;

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
            ->add('categorieName', 'text', array('label' => 'Nom de la catégorie'))
            ->add('categorieDesc', 'textarea', array('label' => 'Description de la catégorie'))
            ->add('categorieParentId', 'choice', array('required' => false))
            /*->add('categorieParentId', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Categorie',
                  'property' => 'categorieName'))*/
            ->add('isOnline', 'checkbox', array('required' => false, 'label' => 'Cocher la case si vous souhaitez mettre en ligne'))
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
