<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * TypeProfil
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity(fields={"libelle"}, message="Ce type de profil existe déjà")
 */
class TypeProfil
{
    /**
     * @ORM\OneToMany(targetEntity="Locazik\UserBundle\Entity\User", mappedBy="typeProfil")
     */
    private $users;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="libelle", type="string", length=40)
     * @Assert\Length(min=2, minMessage="Le type de profil doit faire au moins {{ limit }} caractères.")
     */
    private $libelle;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set libelle
     *
     * @param string $libelle
     * @return typeprofil
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add users
     *
     * @param \Locazik\UserBundle\Entity\User $users
     * @return typeprofil
     */
    public function addUser(\Locazik\UserBundle\Entity\User $users)
    {
        $this->users[] = $users;

        return $this;
    }

    /**
     * Remove users
     *
     * @param \Locazik\UserBundle\Entity\User $users
     */
    public function removeUser(\Locazik\UserBundle\Entity\User $users)
    {
        $this->users->removeElement($users);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUsers()
    {
        return $this->users;
    }
}
