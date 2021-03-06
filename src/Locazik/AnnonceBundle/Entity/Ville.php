<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="Locazik\AnnonceBundle\Entity\Repository\GeoRepository")
 */
class Ville
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Departement", inversedBy="villes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $departement;
    
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", mappedBy="departement")
     */
    private $annonces;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=false)
     */
    private $nom;
    
    /**
     * @var string
     *
     * @ORM\Column(name="villeurl", type="string", length=80)
     */
    private $villeurl;

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=6, nullable=false)
     */
    private $cp;

    /**
     * @var string
     *
     * @ORM\Column(name="lat", type="string", length=12, nullable=false)
     */
    private $lat;

    /**
     * @var string
     *
     * @ORM\Column(name="lon", type="string", length=12, nullable=false)
     */
    private $lon;



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
     * Set nom
     *
     * @param string $nom
     * @return Ville
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return Ville
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set lat
     *
     * @param string $lat
     * @return Ville
     */
    public function setLat($lat)
    {
        $this->lat = $lat;

        return $this;
    }

    /**
     * Get lat
     *
     * @return string 
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * Set lon
     *
     * @param string $lon
     * @return Ville
     */
    public function setLon($lon)
    {
        $this->lon = $lon;

        return $this;
    }

    /**
     * Get lon
     *
     * @return string 
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * Set villeurl
     *
     * @param string $villeurl
     * @return Ville
     */
    public function setVilleurl($villeurl)
    {
        $this->villeurl = $villeurl;

        return $this;
    }

    /**
     * Get villeurl
     *
     * @return string 
     */
    public function getVilleurl()
    {
        return $this->villeurl;
    }

    /**
     * Set departement
     *
     * @param \Locazik\AnnonceBundle\Entity\Departement $departement
     * @return Ville
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annonces = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add annonces
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonces
     * @return Ville
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
}
