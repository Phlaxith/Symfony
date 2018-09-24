<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="commune")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommuneRepository")
 */
class Commune
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="commune", type="string", length=255, unique=true)
     */
    private $commune;

    /**
     * @var int
     *
     * @ORM\Column(name="code_insee", type="integer", unique=true)
     */
    private $codeInsee;

    /**
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="communes")
     * @ORM\JoinColumn(name="departement_id", referencedColumnName="id")
     */
    private $departement;

    /**
     * One Commune has Many Annonces.
     * @ORM\OneToMany(targetEntity="Annonce", mappedBy="commune")
     */
    private $annonces;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set commune
     *
     * @param string $commune
     *
     * @return Commune
     */
    public function setCommune($commune)
    {
        $this->commune = $commune;

        return $this;
    }

    /**
     * Get commune
     *
     * @return string
     */
    public function getCommune()
    {
        return $this->commune;
    }

    /**
     * Set codeInsee
     *
     * @param integer $codeInsee
     *
     * @return Commune
     */
    public function setCodeInsee($codeInsee)
    {
        $this->codeInsee = $codeInsee;

        return $this;
    }

    /**
     * Get codeInsee
     *
     * @return int
     */
    public function getCodeInsee()
    {
        return $this->codeInsee;
    }

    /**
     * Set departement
     *
     * @param string $departement
     *
     * @return Commune
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string
     */
    public function getDepartement()
    {
        return $this->departement;
    }
}

