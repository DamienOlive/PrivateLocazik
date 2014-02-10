<?php

namespace Locazik\AnnonceBundle\Manager;

use Doctrine\ORM\EntityManager;
use Locazik\AnnonceBundle\Manager\BaseManager;
use Locazik\AnnonceBundle\Entity\MotInterdit;

class MotInterditManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function loadMotInterdit($motInterditId)
    {
        return $this->getRepository()->findOneBy(array('id' => $motInterditId));
    }
    
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Save MotInterdit entity
     * @param MotInterdit $motInterdit
     */
    public function saveMotInterdit(MotInterdit $motInterdit)
    {
        $this->persistAndFlush($motInterdit);
    }
    
    public function removeMotInterdit(MotInterdit $motInterdit)
    {
        $this->removeAndFlush($motInterdit);
    }

    public function getRepository()
    {
        return $this->em->getRepository('LocazikAnnonceBundle:MotInterdit');
    }

}