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
            ->add('annonceName', 'text', array('label' => 'Titre de l\'annonce :'))
            ->add('annonceDesc', 'textarea', array('label' => 'Texte de l\'annonce :'))
            ->add('annoncePrix', 'text', array('label' => 'Prix à la journée :'))
            ->add('annonceCp', 'text')
            /*->add('categorie', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Categorie',
                  'property' => 'categorieName'))*/
            ->add('categorie', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Categorie',
                  'property' => 'categorieName',
                  'query_builder' => function(\Locazik\AnnonceBundle\Entity\CategorieRepository $c) {
                    return $c->listeCategorieOnline();
                  }))
            ->add('imageAnnonces', 'collection', 
                    array('type' => new ImageAnnonceType(),
                        'allow_add'    => true, 
                        'allow_delete' => true,
                        'label' => 'Photos : Une annonce avec photo est 8 fois plus consultée qu\'une annonce sans photo'))
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
