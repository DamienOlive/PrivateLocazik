<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity
 */
class Departement
{
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Ville", mappedBy="departement")
     */
    private $villes;
    
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", mappedBy="departement")
     */
    private $annonces;
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Region", inversedBy="departements")
     * @ORM\JoinColumn(nullable=false)
     */
    private $region;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=3, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nomDepartement", type="string", length=250, nullable=false)
     */
    private $nomdepartement;



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
     * Set code
     *
     * @param string $code
     * @return Departement
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set nomdepartement
     *
     * @param string $nomdepartement
     * @return Departement
     */
    public function setNomdepartement($nomdepartement)
    {
        $this->nomdepartement = $nomdepartement;

        return $this;
    }

    /**
     * Get nomdepartement
     *
     * @return string 
     */
    public function getNomdepartement()
    {
        return $this->nomdepartement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->villes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add villes
     *
     * @param \Locazik\AnnonceBundle\Entity\Ville $villes
     * @return Departement
     */
    public function addVille(\Locazik\AnnonceBundle\Entity\Ville $villes)
    {
        $this->villes[] = $villes;

        return $this;
    }

    /**
     * Remove villes
     *
     * @param \Locazik\AnnonceBundle\Entity\Ville $villes
     */
    public function removeVille(\Locazik\AnnonceBundle\Entity\Ville $villes)
    {
        $this->villes->removeElement($villes);
    }

    /**
     * Get villes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVilles()
    {
        return $this->villes;
    }

    /**
     * Add annonces
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonces
     * @return Departement
     */
    public function addAnnonce(\Locazik\AnnonceBundle\Entity\Annonce $annonces)
    {
        $this->annonces[] = $annonces;

        return $this;
    }

    /**
     * Remove annonces
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonces
     */
    public function removeAnnonce(\Locazik\AnnonceBundle\Entity\Annonce $annonces)
    {
        $this->annonces->removeElement($annonces);
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

    /**
     * Set region
     *
     * @param \Locazik\AnnonceBundle\Entity\Region $region
     * @return Departement
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
}
