<?php

namespace Locazik\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", mappedBy="user", cascade={"persist", "remove"})
    */
    private $annonces;
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\TypeProfil", inversedBy="users")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeProfil;
    
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
        parent::__construct();
        $this->roles = array('ROLE_USER');
        $this->dateCreation = new \Datetime();
        $this->dateUpdate = new \Datetime();
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
     * Set typeProfil
     *
     * @param \Locazik\AnnonceBundle\Entity\TypeProfil $typeProfil
     * @return User
     */
    public function setTypeProfil(\Locazik\AnnonceBundle\Entity\TypeProfil $typeProfil)
    {
        $this->typeProfil = $typeProfil;

        return $this;
    }

    /**
     * Get typeProfil
     *
     * @return \Locazik\AnnonceBundle\Entity\TypeProfil 
     */
    public function getTypeProfil()
    {
        return $this->typeProfil;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return User
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
     * @return User
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
     * Add annonces
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonces
     * @return User
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
