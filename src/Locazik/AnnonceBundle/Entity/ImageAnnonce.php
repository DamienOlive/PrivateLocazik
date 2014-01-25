<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ImageAnnonce
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class ImageAnnonce
{
    
    /**
     * @ORM\ManyToOne(targetEntity="Locazik\AnnonceBundle\Entity\Annonce", inversedBy="imageAnnonces")
     * @ORM\JoinColumn(nullable=false)
     */
    private $annonce;
    
    /**
     * @Assert\File()
     */
    private $file;
    
    private $tempFilename;
    
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
     * @ORM\Column(name="ImageName", type="string", length=80)
     */
    private $imageName;

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


    public function __construct()
    {
        $this->dateCreation = new \DateTime();
        $this->dateUpdate = new \DateTime();
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
     * Set imageName
     *
     * @param string $imageName
     * @return ImageAnnonce
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * Get imageName
     *
     * @return string 
     */
    public function getImageName()
    {
        return $this->imageName;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return ImageAnnonce
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
     * Set file
     *
     * @param File $file
     * @return ImageAnnonce
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return File 
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set dateUpdate
     *
     * @param \DateTime $dateUpdate
     * @return ImageAnnonce
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
     * Set annonce
     *
     * @param \Locazik\AnnonceBundle\Entity\Annonce $annonce
     * @return ImageAnnonce
     */
    public function setAnnonce(\Locazik\AnnonceBundle\Entity\Annonce $annonce)
    {
        $this->annonce = $annonce;
    }

    /**
     * Get annonce
     *
     * @return \Locazik\AnnonceBundle\Entity\Annonce 
     */
    public function getAnnonce()
    {
        return $this->annonce;
    }
    
    public function upload()
    {
        // Si jamais il n'y a pas de fichier (champ facultatif)
        
        if ($this->file === null) {
            return;
        }
        
        $this->imageName = sha1(uniqid(mt_rand(), true)).'.'.$this->file->guessExtension();

        // On déplace le fichier envoyé dans le répertoire de notre choix
        $this->file->move($this->getUploadRootDir(), $this->imageName);
    }

    public function getUploadDir()
    {
        // On retourne le chemin relatif vers l'image pour un navigateur
        return 'uploads/img/';
    }

    public function getUploadRootDir()
    {
        // On retourne le chemin relatif vers l'image pour notre code PHP
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    /**
     * @ORM\PreRemove()
    */
    public function preRemoveUpload()
    {
        // On sauvegarde temporairement le nom du fichier, car il dépend de l'id
        $this->tempFilename = $this->getUploadRootDir().'/'.$this->imageName;
    }

    /**
     * @ORM\PostRemove()
    */
    public function removeUpload()
    {
        // En PostRemove, on n'a pas accès à l'id, on utilise notre nom sauvegardé
        if (file_exists($this->tempFilename)) {
            // On supprime le fichier
            unlink($this->tempFilename);
        }
    }
    
}
