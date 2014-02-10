<?php

namespace Locazik\UserBundle\Manager;

use Doctrine\ORM\EntityManager;
use Locazik\AnnonceBundle\Manager\BaseManager;
use Locazik\UserBundle\Entity\User;

class UserManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManager $entityManager)
    {
        $this->em = $entityManager;
    }

    public function loadUser($userId)
    {
        return $this->getRepository()->findOneBy(array('id' => $userId));
    }
    
    public function findAll()
    {
        return $this->getRepository()->findAll();
    }

    /**
     * Save User entity
     * @param User $user
     */
    public function saveUser(User $user)
    {
        $this->persistAndFlush($user);
    }
    
    public function removeUser(User $user)
    {
        $this->removeAndFlush($user);
    }

    public function getRepository()
    {
        return $this->em->getRepository('LocazikUserBundle:User');
    }

}