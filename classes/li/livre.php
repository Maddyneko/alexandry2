<?php


class Livre{

    private $id;
    private $idSerie;
    private $idPaysOrigine;
    private $numeroEpisode;
    private $idLicence;
    private $idPremiereEdition;

    /*********************/
    /*   CONSTRUCTEUR    */
    /*********************/

    /*********************/
    /* GETTERS & SETTERS */
    /*********************/

    /*Getters*/

    public function getId()
    {
        return $this->id;
    }
    public function getIdSerie()
    {
        return $this->idSerie;
    }
    public function getIdPaysOrigine()
    {
        return $this->idSerie;
    }
    public function getNumeroEpisode()
    {
        return $this->numeroEpisode;
    }
    public function getIdLicence()
    {
        return $this->idLicence;
    }
    public function getIdPremiereEdition()
    {
        return $this->idPremiereEdition;
    }

    /*Setters*/
    public function setId($valeur)
    {
         $this->id = $valeur;
    }
    public function setIdSerie($valeur)
    {
         $this->idSerie = $valeur;
    }
    public function setIdPaysOrigine($valeur)
    {
         $this->idPaysOrigine = $valeur;
    }
    public function setNumeroEpisode($valeur)
    {
         $this->numeroEpisode = $valeur;
    }
        public function setIdLicence($valeur)
    {
         $this->idLicence = $valeur;
    }
    public function setIdPremiereEdition($valeur)
    {
         $this->idPremiereEdition = $valeur;
    }

    public function setDatas($data)
    {
        if (isset($data['Id'])) {
            $this->id = $data['Id'];
        }
        if (isset($data['IdSerie'])) {
            $this->idSerie = $data['IdSerie'];
        }
        if (isset($data['IdPaysOrigine'])) {
            $this->idPaysOrigine = $data['IdPaysOrigine'];
        }
        if (isset($data['NumeroEpisode'])) {
            $this->numeroEpisode = $data['NumeroEpisode'];
        }
        if (isset($data['IdLicence'])) {
            $this->idLicence = $data['IdLicence'];
        }
        if (isset($data['IdPremiereEdition'])) {
            $this->idPremiereEdition = $data['IdPremiereEdition'];
        }
    }

    /*********************/
    /*       BDD         */
    /*********************/
    public function getLivreBd($bdd) {
        $requete = "SELECT * "
            . "FROM li_livre_t "
            . "WHERE Id = ". $this->id . " "
            . "LIMIT 0, 1 "
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    public function ajoutLivre($bdd) {
        $requete = "INSERT INTO li_livre_t ("
        . "IdSerie "
        . ", NumeroEpisode "
        . ", IdLicence "
        //. ", IdPremiereEdition "
        . ", IdPaysOrigine "
        . ") VALUES( " 
        . " " . $this->idSerie . " "
        . ", " . $this->numeroEpisode . " "
        . ", " . $this->idLicence . " "
        //. ", " . $this->idPremiereEdition . " "
        . ", " . $this->idPaysOrigine . " "

        . ") ";
        $bdd->query($requete);
    } 

    public function modifierBd($bdd) {
        $requete = "UPDATE li_livre_t SET "
            . " IdSerie = " . $this->idSerie . " "
            . ", NumeroEpisode = " . $this->numeroEpisode . " "
            . ", IdLicence = " . $this->idLicence . " "
            . ", IdPremiereEdition = " . $this->idPremiereEdition . " "
            . ", IdPaysOrigine = " . $this->idPaysOrigine . " "
            . "WHERE Id = " . $this->Id . " ) ";
        $bdd->query($requete); 
    }

    public function getLivrePaysDetailBd($bdd) {
        $requete = "SELECT Id, IdSerie, NumeroEpisode, IdLicence, IdPremiereEdition, IdPaysOrigine "
            . "FROM li_livre_t L "

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