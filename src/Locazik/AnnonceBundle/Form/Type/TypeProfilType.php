<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeProfilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('typeProfil', 'entity', array(
              'class'    => 'LocazikAnnonceBundle:TypeProfil',
              'property' => 'libelle',
              'empty_data'  => null,
              'empty_value' => "Choisir",
              'label' => 'Vous êtes ',
              'required' => false));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_typeprofil';
    }
}