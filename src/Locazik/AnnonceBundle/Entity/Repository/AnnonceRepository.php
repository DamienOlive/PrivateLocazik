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
    public function listeAnnonceOnline($data = null, $categorie = null, $keyword = null, $orderBy = null)
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
            if(!empty($data['ville']))
            {
                $qb->andWhere('a.ville = :villeId');
                $qb->setParameter('villeId', $data['ville']);
            }
            if($orderBy && $orderBy === 'date')
            {
                $qb->orderBy('a.dateCreation', 'DESC');
            }
            if($orderBy && $orderBy === 'prix')
            {
                $qb->orderBy('a.annoncePrix', 'ASC');
            }
        }
        
        if($categorie)
        {
            $qb->andWhere('a.categorie = :categorieId');
            $qb->setParameter('categorieId', $categorie->getId());
        }
        
        if($keyword)
        {
            $qb->andWhere('a.annonceName like :keyword OR a.annonceDesc like :keyword');
            $qb->setParameter('keyword', '%'.$keyword.'%');
        }
        
        $listeAnnonces = $qb->getQuery();
        
        return $listeAnnonces;
    }
}