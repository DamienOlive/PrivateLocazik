<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region")
 * @ORM\Entity(repositoryClass="Locazik\AnnonceBundle\Entity\Repository\GeoRepository")
 */
class Region
{
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Departement", mappedBy="region")
     */
    private $departements;
    
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", mappedBy="region")
     */
    private $annonces;
    
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
     * @ORM\Column(name="nomRegion", type="string", length=250, nullable=false)
     */
    private $nomregion;

    /**
     * @var string
     *
     * @ORM\Column(name="urlregion", type="string", length=80, nullable=true)
     */
    private $urlregion;
    
    /**
     * @var string
     *
     * @ORM\Column(name="jsregion", type="string", length=80, nullable=true)
     */
    private $jsregion;

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
     * Set nomregion
     *
     * @param string $nomregion
     * @return Region
     */
    public function setNomregion($nomregion)
    {
        $this->nomregion = $nomregion;

        return $this;
    }

    /**
     * Get nomregion
     *
     * @return string 
     */
    public function getNomregion()
    {
        return $this->nomregion;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departements
     *
     * @param \Locazik\AnnonceBundle\Entity\Departement $departements
     * @return Region
     */
    public function addDepartement(\Locazik\AnnonceBundle\Entity\Departement $departements)
    {
        $this->departements[] = $departements;

        return $this;
    }

    /**
     * Remove departements
     *
     * @param \Locazik\AnnonceBundle\Entity\Departement $departements
     */
    public function removeDepartement(\Locazik\AnnonceBundle\Entity\Departement $departements)
    {
        $this->departements->removeElement($departements);
    }

    /**
     * Get departements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * Add annonces
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonces
     * @return Region
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
     * Set urlregion
     *
     * @param string $urlregion
     * @return Region
     */
    public function setUrlregion($urlregion)
    {
        $this->urlregion = $urlregion;

        return $this;
    }

    /**
     * Get urlregion
     *
     * @return string 
     */
    public function getUrlregion()
    {
        return $this->urlregion;
    }

    /**
     * Set jsregion
     *
     * @param string $jsregion
     * @return Region
     */
    public function setJsregion($jsregion)
    {
        $this->jsregion = $jsregion;

        return $this;
    }

    /**
     * Get jsregion
     *
     * @return string 
     */
    public function getJsregion()
    {
        return $this->jsregion;
    }
}
