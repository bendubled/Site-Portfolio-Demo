<?php

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * perso
 *
 * @ORM\Table(name="perso")
 * @ORM\Entity(repositoryClass="OC\PlatformBundle\Repository\persoRepository")
 */
class perso
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
     * @var int
     *
     * @ORM\Column(name="vie", type="integer")
     */
    private $vie;

    /**
     * @var int
     *
     * @ORM\Column(name="attaque", type="integer")
     */
    private $attaque;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


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
     * Set vie
     *
     * @param integer $vie
     *
     * @return perso
     */
    public function setVie($vie)
    {
        $this->vie = $vie;

        return $this;
    }

    /**
     * Get vie
     *
     * @return int
     */
    public function getVie()
    {
        return $this->vie;
    }

    /**
     * Set attaque
     *
     * @param integer $attaque
     *
     * @return perso
     */
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get attaque
     *
     * @return int
     */
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return perso
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
}

