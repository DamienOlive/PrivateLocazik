<?php
// src/Locazik/AnnonceBundle/Entity/Repository

namespace Locazik\AnnonceBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * AnnonceRepository
 */
class AnnonceRepository extends EntityRepository
{
    public function listeAnnonceOnline($data = null, $date = 'DESC', $prix = null)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        
        $qb = $queryBuilder
                ->select('a')
                ->from($this->_entityName, 'a')
                ->where('a.isOnline = :isOnline')
                ->andWhere('a.user IS NOT NULL')
                ->setParameter('isOnline', true)
                ->orderBy('a.dateCreation', 'DESC');
        
        if($data)
        {
            if(!empty($data['region']))
            {
                $qb->andWhere('a.region = :regionId');
                $qb->setParameter('regionId', $data['region']);
            }
            if(!empty($data['departement']))
            {
                $qb->andWhere('a.departement = :departementId');
                $qb->setParameter('departementId', $data['departement']);
            }
            if(!empty($data['cp']))
            {
                $qb->andWhere('a.annonceCp = :cp');
                $qb->setParameter('cp', $data['cp']);
            }
            if($date !== 'DESC')
            {
                $qb->orderBy('a.dateCreation', 'ASC');
            }
            if($prix)
            {
                $qb->orderBy('a.annoncePrix', 'ASC');
            }
        }
        
        
        $listeAnnonces = $qb->getQuery()
                            ->getResult();
        
        return $listeAnnonces;
    }
}