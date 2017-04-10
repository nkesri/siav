<?php

namespace ppe3Bundle\Entity;

/**
 * Region
 */
class Region
{
    /**
     * @var string
     */
    private $libregion;

    /**
     * @var integer
     */
    private $postedispo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set libregion
     *
     * @param string $libregion
     *
     * @return Region
     */
    public function setLibregion($libregion)
    {
        $this->libregion = $libregion;

        return $this;
    }

    /**
     * Get libregion
     *
     * @return string
     */
    public function getLibregion()
    {
        return $this->libregion;
    }

    /**
     * Set postedispo
     *
     * @param integer $postedispo
     *
     * @return Region
     */
    public function setPostedispo($postedispo)
    {
        $this->postedispo = $postedispo;

        return $this;
    }

    /**
     * Get postedispo
     *
     * @return integer
     */
    public function getPostedispo()
    {
        return $this->postedispo;
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

