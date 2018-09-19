<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="annonce")
 */
class Annonce
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $titre;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created_at;

    /**
     * One Annonce has One Creator.
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="creator", referencedColumnName="id")
     */
    protected $creator;

    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $commune;
    
    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $departement;

    public function getId()
    {
        return $this->id;
    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    public function getCreateAt()
    {
        return $this->created_at;
    }
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCreator()
    {
        return $this->creator;
    }
    public function setCreator()
    {
        $this->creator = $creator;

        return $this;
    }

    public function getCommune()
    {
        return $this->commune;
    }
    public function setCommune()
    {
        $this->commune = $commune;

        return $this;
    }

    public function getDepartement()
    {
        return $this->departement;
    }
    public function setDepartement()
    {
        $this->departement = $departement;

        return $this;
    }

    public function __construct()
    {
        // your own logic
    }
}