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
    
    public function __construct(\Doctrine\ORM\EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('region', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Region',
                  'property' => 'nomRegion',
                  'query_builder' => function(\Locazik\AnnonceBundle\Entity\Repository\RegionRepository $r) {
                      return $r->listeRegionOrderBy();
                  },
                  'label' => 'Région :',
                  'attr' => array('onchange' => 'listeDepFromRegion(this.value);')))
            /*->add('departement', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Departement',
                  'property' => 'nomDepartement',
                  'label' => 'Département :'))*/
            ->add('departement', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Departement',
                  'property' => 'nomDepartement',
                  'label' => 'Département :'))
            ->add('annonceCp', 'text')
            ->add('annonceName', 'text', array('label' => 'Titre de l\'annonce :'))
            ->add('annonceDesc', 'textarea', array('label' => 'Texte de l\'annonce :'))
            ->add('annoncePrix', 'text', array('label' => 'Prix à la journée :'))
            ->add('categorie', 'entity', array(
                  'class'    => 'LocazikAnnonceBundle:Categorie',
                  'property' => 'categorieName',
                  'query_builder' => function(\Locazik\AnnonceBundle\Entity\Repository\CategorieRepository $c) {
                      return $c->listeCategorieOnline();
                  }))
            ->add('imageAnnonces', 'collection', 
                    array('type' => new ImageAnnonceType(),
                        'allow_add'    => true, 
                        'allow_delete' => true,
                        'label' => 'Photos : Une annonce avec photo est 8 fois plus consultée qu\'une annonce sans photo'))
        ;
                  
        $listener = new \Locazik\AnnonceBundle\Form\Listener\GeoDataListener($builder->getFormFactory(),$this->entityManager);
        $builder->addEventSubscriber($listener);          
              
        /*
        $builder->addEventListener(FormEvents::POST_BIND, function(FormEvent $event) {
            $form = $event->getForm();
            $departementId = $_POST[$this->getName()]['departement'];
            $cp = $form->get('annonceCp')->getData();
            if (!empty($cp))
            {
                if(substr($cp, 0, 2) != $departementId)
                {
                    $errorMsg = "Le code postal ne correspond pas au département sélectionné";
                    $form['annonceCp']->addError(new FormError($errorMsg));
                    
                    $data = $event->getData(); 
                    
                    $em = $event->getForm()->getConfig()->getOption('em');
                    var_dump($event->getForm()->getConfig());
                    $departement = $em->getRepository('LocazikAnnonceBundle:Departement')->find($departementId);
                    $data['departement'] = $departement;
                    $event->setData($data);
                }
            }
        });*/
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
