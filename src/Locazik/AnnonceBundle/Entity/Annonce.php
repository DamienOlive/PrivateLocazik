<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\ImageAnnonce", mappedBy="annonce", cascade={"persist", "remove"})
    */
    private $imageAnnonces;
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Categorie", inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
    */
    private $categorie;
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Region", inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
    */
    private $region;
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Departement", inversedBy="annonces")
     * @ORM\JoinColumn(nullable=false)
    */
    private $departement;
    
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
     * @ORM\Column(name="AnnonceName", type="string", length=120)
     */
    private $annonceName;

    /**
     * @var string
     *
     * @ORM\Column(name="AnnonceDesc", type="text")
     */
    private $annonceDesc;

    /**
     * @var float
     *
     * @ORM\Column(name="AnnoncePrix", type="float")
     */
    private $annoncePrix;

    /**
     * @var string
     *
     * @ORM\Column(name="AnnonceCp", type="string", length=5)
     */
    private $annonceCp;

    /**
     * @var boolean
     *
     * @ORM\Column(name="IsOnline", type="boolean")
     */
    private $isOnline;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateUpdate", type="datetime")
     */
    private $dateUpdate;

    
    public function __construct()
    {
        $this->dateCreation = new \Datetime();
        $this->dateUpdate = new \Datetime();
        $this->isOnline = false;
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
     * Set annonceName
     *
     * @param string $annonceName
     * @return Annonce
     */
    public function setAnnonceName($annonceName)
    {
        $this->annonceName = $annonceName;

        return $this;
    }

    /**
     * Get annonceName
     *
     * @return string 
     */
    public function getAnnonceName()
    {
        return $this->annonceName;
    }

    /**
     * Set annonceDesc
     *
     * @param string $annonceDesc
     * @return Annonce
     */
    public function setAnnonceDesc($annonceDesc)
    {
        $this->annonceDesc = $annonceDesc;

        return $this;
    }

    /**
     * Get annonceDesc
     *
     * @return string 
     */
    public function getAnnonceDesc()
    {
        return $this->annonceDesc;
    }

    /**
     * Set annoncePrix
     *
     * @param float $annoncePrix
     * @return Annonce
     */
    public function setAnnoncePrix($annoncePrix)
    {
        $this->annoncePrix = $annoncePrix;

        return $this;
    }

    /**
     * Get annoncePrix
     *
     * @return float 
     */
    public function getAnnoncePrix()
    {
        return $this->annoncePrix;
    }

    /**
     * Set annonceCp
     *
     * @param string $annonceCp
     * @return Annonce
     */
    public function setAnnonceCp($annonceCp)
    {
        $this->annonceCp = $annonceCp;

        return $this;
    }

    /**
     * Get annonceCp
     *
     * @return string 
     */
    public function getAnnonceCp()
    {
        return $this->annonceCp;
    }

    /**
     * Set isOnline
     *
     * @param boolean $isOnline
     * @return Annonce
     */
    public function setIsOnline($isOnline)
    {
        $this->isOnline = $isOnline;

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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Annonce
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
     * @return Annonce
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
     * Add imageAnnonces
     *
     * @param \Locazik\AnnonceBundle\Entity\ImageAnnonce $imageAnnonces
     * @return Annonce
     */
    public function addImageAnnonce(\Locazik\AnnonceBundle\Entity\ImageAnnonce $imageAnnonces)
    {
        $this->imageAnnonces[] = $imageAnnonces;

        return $this;
    }

    /**
     * Remove imageAnnonces
     *
     * @param \Locazik\AnnonceBundle\Entity\ImageAnnonce $imageAnnonces
     */
    public function removeImageAnnonce(\Locazik\AnnonceBundle\Entity\ImageAnnonce $imageAnnonces)
    {
        $this->imageAnnonces->removeElement($imageAnnonces);
    }

    /**
     * Get imageAnnonces
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getImageAnnonces()
    {
        return $this->imageAnnonces;
    }

    /**
     * Set categorie
     *
     * @param \Locazik\AnnonceBundle\Entity\Categorie $categorie
     * @return Annonce
     */
    public function setCategorie(\Locazik\AnnonceBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Locazik\AnnonceBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set region
     *
     * @param \Locazik\AnnonceBundle\Entity\Region $region
     * @return Annonce
     */
    public function setRegion(\Locazik\AnnonceBundle\Entity\Region $region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \Locazik\AnnonceBundle\Entity\Region 
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set departement
     *
     * @param \Locazik\AnnonceBundle\Entity\Departement $departement
     * @return Annonce
     */
    public function setDepartement(\Locazik\AnnonceBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return \Locazik\AnnonceBundle\Entity\Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}
