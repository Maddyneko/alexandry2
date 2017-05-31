<?php


class Pays{

    private $Id;
    private $nomPays;
    private $initialesPays;
    private $langue;
    private $adjectifPays;
    /*********************/
    /*   CONSTRUCTEUR    */
    /*********************/

    /*********************/
    /* GETTERS & SETTERS */
    /*********************/

    /*Getters*/

    public function getId()
    {
        return $this->Id;
    }

    public function getNomPays()
    {
        return $this->nomPays;
    }

    public function getInitialesPays()
    {
        return $this->initialesPays;
    }

    public function getLangue()
    {
        return $this->langue;
    }

    public function getAdjectifPays()
    {
        return $this->adjectifPays;
    }

    /*Setters*/
    public function setId($valeur)
    {
         $this->Id = $valeur;
    }

    public function setnomPays($valeur)
    {
         $this->nomPays = $valeur;
    }

    public function setinitialesPays($valeur)
    {
         $this->initialesPays = $valeur;
    }

    public function setlangue($valeur)
    {
         $this->langue = $valeur;
    }

    public function setAdjectifPays($valeur)
    {
        $this->adjectifPays = $valeur;
    }

    public function setDatas($data)
    {
        if (isset($data['Id'])) {
            $this->Id = $data['Id'];
        }
        if (isset($data['NomPays'])) {
            $this->nomPays = $data['NomPays'];
        }
        if (isset($data['InitialesPays'])) {
            $this->initialesPays = $data['InitialesPays'];
        }
        if (isset($data['Langue'])) {
            $this->langue = $data['Langue'];        
        }
        if (isset($data['AdjectifPays'])) {
            $this->adjectifPays = $data['AdjectifPays'];
        }
    }

    /*********************/
    /*       BDD         */
    /*********************/
    public function getPaysBd($bdd) {
        $requete = "SELECT * "
            . "FROM x_pays_t "
            . "WHERE Id = ". $this->Id . " "
            . "LIMIT 0, 1 "
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    public function ajoutPays($bdd) {
        $requete = "INSERT INTO x_pays_t ("
        . "NomPays "
        . ", InitialesPays "
        . ", Langue "
        . ", AdjectifPays "
        . ") VALUES( " 
        . $bdd->quote($this->nomPays) . " "
        . ", " . $bdd->quote($this->initialesPays) . " "
        . ", " . $bdd->quote($this->langue). " "
        . ", " . $bdd->quote($this->adjectifPays). " "
        . ") ";
        $bdd->query($requete)->fetch(); 
    } 

    public function modifierBd($bdd) {
        $requete = "UPDATE x_pays_t SET "
            . "nomPays = " . $this->nomPays . " "
            . ", initialesPays = " . $bdd->quote($this->initialesPays) . " "
            . ", langue = " . $bdd->quote($this->langue) . " "
            . ", AdjectifPays = " . $bdd->quote($this->langue) . " "

            . "WHERE Id = " . $this->Id . " ) ";
        $bdd->query($requete)->fetch(); 
    }

    public function getPaysDetailBd($bdd) {
        $requete = "SELECT  nomPays, initialesPays, langue, AdjectifPays "
            . "FROM x_pays_t "
            . "WHERE Id = " . $this->Id . " "
            . "LIMIT 0,1"
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    /*********************/
    /*       AUTRE       */
    /*********************/
}