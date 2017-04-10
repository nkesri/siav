<?php

namespace ppe3Bundle\Entity;

/**
 * Detaildemande
 */
class Detaildemande
{
    /**
     * @var integer
     */
    private $numordre;

    /**
     * @var integer
     */
    private $iddemande;

    /**
     * @var integer
     */
    private $idregion;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set numordre
     *
     * @param integer $numordre
     *
     * @return Detaildemande
     */
    public function setNumordre($numordre)
    {
        $this->numordre = $numordre;

        return $this;
    }

    /**
     * Get numordre
     *
     * @return integer
     */
    public function getNumordre()
    {
        return $this->numordre;
    }

    /**
     * Set iddemande
     *
     * @param integer $iddemande
     *
     * @return Detaildemande
     */
    public function setIddemande($iddemande)
    {
        $this->iddemande = $iddemande;

        return $this;
    }

    /**
     * Get iddemande
     *
     * @return integer
     */
    public function getIddemande()
    {
        return $this->iddemande;
    }

    /**
     * Set idregion
     *
     * @param integer $idregion
     *
     * @return Detaildemande
     */
    public function setIdregion($idregion)
    {
        $this->idregion = $idregion;

        return $this;
    }

    /**
     * Get idregion
     *
     * @return integer
     */
    public function getIdregion()
    {
        return $this->idregion;
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
}

