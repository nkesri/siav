<?php

namespace ppe3Bundle\Entity;

/**
 * Utilisateur
 */
class Utilisateur
{
    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var \DateTime
     */
    private $dateembauche;

    /**
     * @var string
     */
    private $typecontrat;

    /**
     * @var \DateTime
     */
    private $datefincdd;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $role;

    /**
     * @var integer
     */
    private $nbrvisites;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var integer
     */
    private $idregion;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set login
     *
     * @param string $login
     *
     * @return Utilisateur
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Utilisateur
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

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateembauche
     *
     * @param \DateTime $dateembauche
     *
     * @return Utilisateur
     */
    public function setDateembauche($dateembauche)
    {
        $this->dateembauche = $dateembauche;

        return $this;
    }

    /**
     * Get dateembauche
     *
     * @return \DateTime
     */
    public function getDateembauche()
    {
        return $this->dateembauche;
    }

    /**
     * Set typecontrat
     *
     * @param string $typecontrat
     *
     * @return Utilisateur
     */
    public function setTypecontrat($typecontrat)
    {
        $this->typecontrat = $typecontrat;

        return $this;
    }

    /**
     * Get typecontrat
     *
     * @return string
     */
    public function getTypecontrat()
    {
        return $this->typecontrat;
    }

    /**
     * Set datefincdd
     *
     * @param \DateTime $datefincdd
     *
     * @return Utilisateur
     */
    public function setDatefincdd($datefincdd)
    {
        $this->datefincdd = $datefincdd;

        return $this;
    }

    /**
     * Get datefincdd
     *
     * @return \DateTime
     */
    public function getDatefincdd()
    {
        return $this->datefincdd;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return Utilisateur
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Utilisateur
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set nbrvisites
     *
     * @param integer $nbrvisites
     *
     * @return Utilisateur
     */
    public function setNbrvisites($nbrvisites)
    {
        $this->nbrvisites = $nbrvisites;

        return $this;
    }

    /**
     * Get nbrvisites
     *
     * @return integer
     */
    public function getNbrvisites()
    {
        return $this->nbrvisites;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set idregion
     *
     * @param integer $idregion
     *
     * @return Utilisateur
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

