<?php

namespace Locazik\AnnonceBundle\Manager;

use Doctrine\ORM\EntityManager;
use Locazik\AnnonceBundle\Manager\BaseManager;
use Locazik\AnnonceBundle\Entity\Annonce;

class AnnonceManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function loadAnnonce($annonceId)
    {
        return $this->getRepository()->findOneBy(array('id' => $annonceId));
    }
    
    public function countAnnonces($online = null)
    {
        return $this->getRepository()->countAnnonces($online);
    }
    
    public function countAnnoncesFromUser($user)
    {
        return $this->getRepository()->countAnnoncesFromUser($user);
    }
    
    public function countAnnoncesByDay($day = 0)
    {
        return $this->getRepository()->countAnnoncesByDay($day);
    }
    
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }
    
    public function findAllBy($criteria)
    {
        return $this->getRepository()->findBy($criteria);
    }
    
    // $param type array()
    public function findOneBy($criteria)
    {
        return $this->getRepository()->findOneBy($criteria);
    }
    
    public function insertUserAnnonce($annonceKey, $user)
    {
        $annonce = $this->getRepository()->findOneBy(array('annonceKey' => $annonceKey));
        
        if($annonce !== null)
        {
            $annonce->setUser($user);
            $this->saveAnnonce($annonce);
            return true;
        }
        return false;
    }

    /**
     * Save Annonce entity
     * @param Annonce $annonce
     */
    public function saveAnnonce(Annonce $annonce)
    {
        $this->persistAndFlush($annonce);
    }
    
    public function removeAnnonce(Annonce $annonce)
    {
        $this->removeAndFlush($annonce);
    }

    public function getRepository()
    {
        return $this->em->getRepository('LocazikAnnonceBundle:Annonce');
    }

}