<?php

namespace AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * demandeDeDon
 *
 * @ORM\Table(name="demande_de_don")
 * @ORM\Entity(repositoryClass="AssociationBundle\Repository\demandeDeDonRepository")
 */
class demandeDeDon
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
     * @var float
     *
     * @ORM\Column(name="collecteVisee", type="float")
     */
    private $collecteVisee;

    /**
     * @var float
     *
     * @ORM\Column(name="collecteActuelle", type="float")
     */
    private $collecteActuelle;


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
     * Set collecteVisee
     *
     * @param float $collecteVisee
     *
     * @return demandeDeDon
     */
    public function setCollecteVisee($collecteVisee)
    {
        $this->collecteVisee = $collecteVisee;

        return $this;
    }

    /**
     * Get collecteVisee
     *
     * @return float
     */
    public function getCollecteVisee()
    {
        return $this->collecteVisee;
    }

    /**
     * Set collecteActuelle
     *
     * @param float $collecteActuelle
     *
     * @return demandeDeDon
     */
    public function setCollecteActuelle($collecteActuelle)
    {
        $this->collecteActuelle = $collecteActuelle;

        return $this;
    }

    /**
     * Get collecteActuelle
     *
     * @return float
     */
    public function getCollecteActuelle()
    {
        return $this->collecteActuelle;
    }
}

