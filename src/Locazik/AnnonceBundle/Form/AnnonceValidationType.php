<?php

namespace Locazik\AnnonceBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceValidationType extends AnnonceType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('isOnline', 'checkbox');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_annoncevalidationtype';
    }
}
