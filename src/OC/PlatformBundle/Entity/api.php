<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * api
 *
 * @ORM\Table(name="api")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\apiRepository")
 */
class api
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_formation_principal", type="string", length=255)
     */
    private $libelleFormationPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_niveau_rnpc", type="string", length=255)
     */
    private $libelleNiveauRnpc;

    /**
     * @var string
     *
     * @ORM\Column(name="duree", type="string", length=255)
     */
    private $duree;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_type_formation", type="string", length=255)
     */
    private $libelleTypeFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="tutelle", type="string", length=255)
     */
    private $tutelle;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau_rnpc", type="string", length=255)
     */
    private $niveauRnpc;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_formation_complementaire", type="string", length=255, nullable=true)
     */
    private $libelleFormationComplementaire;


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
     * Set libelleFormationPrincipal
     *
     * @param string $libelleFormationPrincipal
     *
     * @return api
     */
    public function setLibelleFormationPrincipal($libelleFormationPrincipal)
    {
        $this->libelleFormationPrincipal = $libelleFormationPrincipal;

        return $this;
    }

    /**
     * Get libelleFormationPrincipal
     *
     * @return string
     */
    public function getLibelleFormationPrincipal()
    {
        return $this->libelleFormationPrincipal;
    }

    /**
     * Set libelleNiveauRnpc
     *
     * @param string $libelleNiveauRnpc
     *
     * @return api
     */
    public function setLibelleNiveauRnpc($libelleNiveauRnpc)
    {
        $this->libelleNiveauRnpc = $libelleNiveauRnpc;

        return $this;
    }

    /**
     * Get libelleNiveauRnpc
     *
     * @return string
     */
    public function getLibelleNiveauRnpc()
    {
        return $this->libelleNiveauRnpc;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return api
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set libelleTypeFormation
     *
     * @param string $libelleTypeFormation
     *
     * @return api
     */
    public function setLibelleTypeFormation($libelleTypeFormation)
    {
        $this->libelleTypeFormation = $libelleTypeFormation;

        return $this;
    }

    /**
     * Get libelleTypeFormation
     *
     * @return string
     */
    public function getLibelleTypeFormation()
    {
        return $this->libelleTypeFormation;
    }

    /**
     * Set tutelle
     *
     * @param string $tutelle
     *
     * @return api
     */
    public function setTutelle($tutelle)
    {
        $this->tutelle = $tutelle;

        return $this;
    }

    /**
     * Get tutelle
     *
     * @return string
     */
    public function getTutelle()
    {
        return $this->tutelle;
    }

    /**
     * Set niveauRnpc
     *
     * @param string $niveauRnpc
     *
     * @return api
     */
    public function setNiveauRnpc($niveauRnpc)
    {
        $this->niveauRnpc = $niveauRnpc;

        return $this;
    }

    /**
     * Get niveauRnpc
     *
     * @return string
     */
    public function getNiveauRnpc()
    {
        return $this->niveauRnpc;
    }

    /**
     * Set libelleFormationComplementaire
     *
     * @param string $libelleFormationComplementaire
     *
     * @return api
     */
    public function setLibelleFormationComplementaire($libelleFormationComplementaire)
    {
        $this->libelleFormationComplementaire = $libelleFormationComplementaire;

        return $this;
    }

    /**
     * Get libelleFormationComplementaire
     *
     * @return string
     */
    public function getLibelleFormationComplementaire()
    {
        return $this->libelleFormationComplementaire;
    }
}

