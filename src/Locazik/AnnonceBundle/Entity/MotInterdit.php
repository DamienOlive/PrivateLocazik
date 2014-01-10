<?php

namespace Locazik\AnnonceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * MotInterdit
 *
 * @ORM\Table()
 * @ORM\Entity
 * @UniqueEntity(fields={"mot"}, message="Ce mot interdit existe déjà.")
 */
class MotInterdit
{
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
     * @ORM\Column(name="mot", type="string", length=80)
     * @Assert\Length(min=2, minMessage="Le mot interdit doit faire au moins {{ limit }} caractères.")
     */
    private $mot;


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
     * Set mot
     *
     * @param string $mot
     * @return MotInterdit
     */
    public function setMot($mot)
    {
        $this->mot = $mot;

        return $this;
    }

    /**
     * Get mot
     *
     * @return string 
     */
    public function getMot()
    {
        return $this->mot;
    }
}
