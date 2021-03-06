<?php
// src/Locazik/AnnonceBundle/Entity/Repository

namespace Locazik\AnnonceBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query\ResultSetMapping;

/**
 * GeoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GeoRepository extends EntityRepository
{
    public function listeRegionOrderBy()
    {
        $queryBuilder = $this->_em->createQueryBuilder()
                ->select('r')
                ->from('LocazikAnnonceBundle:Region', 'r')
                ->where('r.id <> 8')
                ->orderBy('r.nomregion');
        return $queryBuilder;
    }
    
    public function listeVillesFromFullCp($cp)
    {
        $queryBuilder = $this->_em->createQueryBuilder()
                ->select('v.id, v.nom, v.cp')
                ->from('LocazikAnnonceBundle:Ville', 'v')
                ->where('v.cp = :codePostal')
                ->setParameter('codePostal', $cp)
                ->setMaxResults(5)
                ->orderBy('v.nom');
        return $queryBuilder->getQuery()->getResult();
    }
    
    public function listeVillesFromPartialCp($partialCp)
    {
        $queryBuilder = $this->_em->createQueryBuilder()
                ->select('v.id, v.nom, v.cp')
                ->from('LocazikAnnonceBundle:Ville', 'v')
                ->where('v.cp like :codePostal')
                ->setParameter('codePostal', $partialCp.'%')
                ->setMaxResults(5)
                ->orderBy('v.nom');
        return $queryBuilder->getQuery()->getResult();
    }
    
    public function listeVillesFromPartialName($finder)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        $queryBuilder
                ->select('v.id, v.nom, v.cp')
                ->from('LocazikAnnonceBundle:Ville', 'v')
                ->where('v.nom like :finder')
                ->setParameter('finder', $finder.'%')
                ->setMaxResults(5)
                ->orderBy('v.nom');
        return $queryBuilder->getQuery()->getResult();
    }
    
    public function findVille($cp, $ville)
    {
        $queryBuilder = $this->_em->createQueryBuilder();
        return $queryBuilder
                ->select('v')
                ->from('LocazikAnnonceBundle:Ville', 'v')
                ->where('v.cp = :codePostal')
                ->andWhere('v.nom = :nomVille')
                ->setParameter('codePostal', $cp)
                ->setParameter('nomVille', $ville)
                ->getQuery()->getOneOrNullResult();
    }
}