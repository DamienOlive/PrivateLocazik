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
    
    public function countAnnonces($online = null)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        $qb = $queryBuilder->select('COUNT(a)')->from($this->_entityName, 'a');
        if($online !== null)
        {
            $qb->where('a.isOnline = :isOnline')
               ->setParameter('isOnline', $online);
        }
        $query = $qb->getQuery()->getSingleScalarResult();
        return $query;
    }
    
    public function countAnnoncesFromUser($user)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        return $queryBuilder->select('COUNT(a)')
                     ->from($this->_entityName, 'a')
                     ->where('a.user = :user')
                     ->setParameter('user', $user)
                     ->getQuery()
                     ->getSingleScalarResult();
    }
    
    public function countAnnoncesByDay($day)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        $qb = $queryBuilder->select('a')
                           ->from($this->_entityName, 'a')
                           ->where("DATE( dateCreation ) = DATE( DATE_SUB(NOW( ), INTERVAL 0 DAY))");
        
        return $qb->getQuery()->getSingleScalarResult();
    }
}