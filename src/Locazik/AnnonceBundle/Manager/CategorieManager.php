<?php

namespace Locazik\AnnonceBundle\Manager;

use Doctrine\ORM\EntityManager;
use Locazik\AnnonceBundle\Manager\BaseManager;
use Locazik\AnnonceBundle\Entity\Categorie;

class CategorieManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function loadCategorie($categorieId)
    {
        return $this->getRepository()->findOneBy(array('id' => $categorieId));
    }
    
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }
    
    public function findListBy($criteria)
    {
        return $this->getRepository()->findBy($criteria);
    }
    
    public function findCategoriesOrderbyParent()
    {
        return $this->getRepository()->categoriesOrderbyParent();
    }
    
    public function findListeCategorieOnline()
    {
        $listeParentCategories = $this->getRepository()->listeCategorieOnline();
        $listeCategorieOptions = array();
        foreach($listeParentCategories as $parentCategorie){
            foreach($parentCategorie->getChildren() as $child){
                $listeCategorieOptions[$parentCategorie->getCategorieName()][$child->getId()] = $child->getCategorieName();
            }
        }
        return $listeCategorieOptions;
    }

    /**
     * Save Categorie entity
     * @param Categorie $categorie
     */
    public function saveCategorie(Categorie $categorie)
    {
        $this->persistAndFlush($categorie);
    }
    
    public function removeCategorie(Categorie $categorie)
    {
        $this->removeAndFlush($categorie);
    }

    public function getRepository()
    {
        return $this->em->getRepository('LocazikAnnonceBundle:Categorie');
    }

}