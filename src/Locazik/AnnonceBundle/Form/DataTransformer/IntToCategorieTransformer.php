<?php

// src/Locazik/AnnonceBundle/Form/DataTransformer/IntToCategorieTransformer.php
namespace Locazik\AnnonceBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Doctrine\Common\Persistence\ObjectManager;

class IntToCategorieTransformer implements DataTransformerInterface
{
    /**
     * @var ObjectManager
     */
    private $entityManager;

    /**
     * @param ObjectManager $om
     */
    public function __construct(ObjectManager $om)
    {
        $this->entityManager = $om;
    }

    /**
     * Transforms an object (issue) to a string (number).
     *
     * @param  Issue|null $issue
     * @return string
     */
    public function transform($issue)
    {
        if (null === $issue) {
            return "";
        }

        return $issue->getNumber();
    }

    /**
     * Transforms a string (number) to an object (issue).
     *
     * @param  string $number
     * @return Issue|null
     * @throws TransformationFailedException if object (issue) is not found.
     */
    public function reverseTransform($idCategorie)
    {
        if (!$idCategorie) {
            return null;
        }
        
        $categorie = $this->entityManager
            ->getRepository('LocazikAnnonceBundle:Categorie')
            ->find($idCategorie)
        ;
        
        if (null === $categorie) {
            throw new TransformationFailedException(sprintf(
                'La catégorie avec l\identifiant "%s" n\'a pas été trouvé!',
                $idCategorie
            ));
        }
        else
        {
            // On vérifie que l'annonce soit liée à une catégorie qui a un parent 
            // (location->guitare, cours de musique->piano...)
            if($categorie->getParent() === null)
            {
                throw new TransformationFailedException('La catégorie sélectionnée n\'est pas valide');
            }
        }

        return $categorie;
    }
}