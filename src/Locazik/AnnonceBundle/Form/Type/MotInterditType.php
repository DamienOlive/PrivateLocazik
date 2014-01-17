<?php

namespace Locazik\AnnonceBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MotInterditType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mot', 'text', array('label' => 'Mot à interdire : '))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Locazik\AnnonceBundle\Entity\MotInterdit'
        ));
        
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'locazik_annoncebundle_motinterdit';
    }
}
