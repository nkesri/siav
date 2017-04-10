<?php

namespace ppe3Bundle\Entity;

/**
 * Demande
 */
class Demande
{
    /**
     * @var \DateTime
     */
    private $datedemande;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ppe3Bundle\Entity\Utilisateur
     */
    private $idutilisateur;


    /**
     * Set datedemande
     *
     * @param \DateTime $datedemande
     *
     * @return Demande
     */
    public function setDatedemande($datedemande)
    {
        $this->datedemande = $datedemande;

        return $this;
    }

    /**
     * Get datedemande
     *
     * @return \DateTime
     */
    public function getDatedemande()
    {
        return $this->datedemande;
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
     * Set idutilisateur
     *
     * @param \ppe3Bundle\Entity\Utilisateur $idutilisateur
     *
     * @return Demande
     */
    public function setIdutilisateur(\ppe3Bundle\Entity\Utilisateur $idutilisateur = null)
    {
        $this->idutilisateur = $idutilisateur;

        return $this;
    }

    /**
     * Get idutilisateur
     *
     * @return \ppe3Bundle\Entity\Utilisateur
     */
    public function getIdutilisateur()
    {
        return $this->idutilisateur;
    }
}

