<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceEditAdminType extends AnnonceType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->remove('imageAnnonces');
        $builder->add('isOnline', 'checkbox', array('label' => 'Mettre en ligne : '));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_annonceeditionadmintype';
    }
}
