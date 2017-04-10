<?php

namespace ppe3Bundle\Entity;

/**
 * Affectation
 */
class Affectation
{
    /**
     * @var \DateTime
     */
    private $dateaffect;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \ppe3Bundle\Entity\Region
     */
    private $idregion;

    /**
     * @var \ppe3Bundle\Entity\Utilisateur
     */
    private $idutilisateur;


    /**
     * Set dateaffect
     *
     * @param \DateTime $dateaffect
     *
     * @return Affectation
     */
    public function setDateaffect($dateaffect)
    {
        $this->dateaffect = $dateaffect;

        return $this;
    }

    /**
     * Get dateaffect
     *
     * @return \DateTime
     */
    public function getDateaffect()
    {
        return $this->dateaffect;
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
     * Set idregion
     *
     * @param \ppe3Bundle\Entity\Region $idregion
     *
     * @return Affectation
     */
    public function setIdregion(\ppe3Bundle\Entity\Region $idregion = null)
    {
        $this->idregion = $idregion;

        return $this;
    }

    /**
     * Get idregion
     *
     * @return \ppe3Bundle\Entity\Region
     */
    public function getIdregion()
    {
        return $this->idregion;
    }

    /**
     * Set idutilisateur
     *
     * @param \ppe3Bundle\Entity\Utilisateur $idutilisateur
     *
     * @return Affectation
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

