<?php

namespace Locazik\AnnonceBundle\Manager;

use Doctrine\ORM\EntityManager;
use Locazik\AnnonceBundle\Manager\BaseManager;
use Locazik\AnnonceBundle\Entity\ImageAnnonce;

class ImageAnnonceManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function loadImageAnnonce($imageAnnonceId)
    {
        return $this->getRepository()->findOneBy(array('id' => $imageAnnonceId));
    }
    
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Save ImageAnnonce entity
     * @param Annonce $imageAnnonce
     */
    public function saveImageAnnonce(ImageAnnonce $imageAnnonce)
    {
        $this->persistAndFlush($imageAnnonce);
    }
    
    public function removeImageAnnonce(ImageAnnonce $imageAnnonce)
    {
        $this->removeAndFlush($imageAnnonce);
    }

    public function getRepository()
    {
        return $this->em->getRepository('LocazikAnnonceBundle:ImageAnnonce');
    }

}