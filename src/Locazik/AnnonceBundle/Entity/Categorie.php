<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Categorie
 *
 * @ORM\Table(name="Categorie")
 * @ORM\Entity
 */
class Categorie
{
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", mappedBy="categorie")
    */
    private $annonces;
    
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
     *
     * @ORM\Column(name="CategorieName", type="string", length=80)
     * @Assert\Length(min=5, minMessage="Le titre doit faire au moins {{ limit }} caractères.")
     */
    private $categorieName;

    /**
     * @var string
     *
     * @ORM\Column(name="CategorieDesc", type="text")
     * @Assert\Length(min=20, minMessage="La description doit faire au moins {{ limit }} caractères.")
     */
    private $categorieDesc;

    /**
     * @var integer
     *
     * @ORM\Column(name="CategorieParentId", type="integer")
     */
    private $categorieParentId;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsOnline", type="boolean")
     */
    private $isOnline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateUpdate", type="datetime")
     */
    private $dateUpdate;
    
    private $categorieParentName;

    public function __construct()
    {
        $this->dateCreation = new \Datetime();
        $this->dateUpdate = new \Datetime();
        $this->isOnline = false;
        $this->categorieParentId = false;
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * Set categorieName
     *
     * @param string $categorieName
     * @return Categorie
     */
    public function setCategorieName($categorieName)
    {
        $this->categorieName = $categorieName;

        return $this;
    }

    /**
     * Get categorieName
     *
     * @return string 
     */
    public function getCategorieName()
    {
        return $this->categorieName;
    }

    /**
     * Set categorieDesc
     *
     * @param text $categorieDesc
     * @return Categorie
     */
    public function setCategorieDesc($categorieDesc)
    {
        $this->categorieDesc = $categorieDesc;

        return $this;
    }

    /**
     * Get categorieDesc
     *
     * @return text 
     */
    public function getCategorieDesc()
    {
        return $this->categorieDesc;
    }

    /**
     * Set categorieParentId
     *
     * @param integer $categorieParentId
     * @return Categorie
     */
    public function setCategorieParentId($categorieParentId)
    {
        $this->categorieParentId = $categorieParentId;

        return $this;
    }

    /**
     * Get categorieParentId
     *
     * @return integer 
     */
    public function getCategorieParentId()
    {
        return $this->categorieParentId;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Categorie
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return Categorie
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;

        return $this;
    }

    /**
     * Get dateUpdate
     *
     * @return \DateTime 
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return Categorie
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

        return $this;
    }

    /**
     * Get CategorieParentName
     *
     * @return string 
     */
    public function getCategorieParentName()
    {
        return $this->categorieParentName;
    }
    
    /**
     * Set CategorieParentName
     *
     * @param string $categorieParentName
     * @return Categorie
     */
    public function setCategorieParentName($categorieParentName)
    {
        $this->categorieParentName = $categorieParentName;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return boolean 
     */
    public function getIsOnline()
    {
        return $this->isOnline;
    }

    /**
     * Remove annonce
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonce
     */
    public function removeAnnonce(\Locazik\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonces->removeElement($annonce);
    }

    /**
     * Get annonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }
}
