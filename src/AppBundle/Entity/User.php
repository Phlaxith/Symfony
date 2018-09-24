<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * One Product has Many Features.
     * @ORM\OneToMany(targetEntity="Annonce", mappedBy="creator")
     */
    private $annonces;

    public function __construct()
    {
        parent::__construct();
        $this->annonces = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getAnnonces()
    {
        return $this->annonces;
    }

    /**
     * @param Annonce $annonce
     */
    public function addAnnonce(Annonce $annonce)
    {
        $this->annonces[] = $annonce;
    }

    /**
     *
     */
    public function removeAnnonces()
    {
        $this->annonces = new ArrayCollection();
    }
}