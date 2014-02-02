<?php

namespace Locazik\UserBundle\Form\Type;

use Locazik\AnnonceBundle\Form\Type\TypeProfilType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class UserRegistrationType extends BaseType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('typeProfil', 'entity', array(
              'class'    => 'LocazikAnnonceBundle:TypeProfil',
              'property' => 'libelle',
              'empty_data'  => null,
              'empty_value' => "Choisir",
              'label' => 'Vous êtes '));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Registration')
        ));
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_userbundle_userregistration';
    }
}