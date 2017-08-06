<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/livrePays.php');


class Livre{

    private $id;
    private $idSerie;
    private $idPaysOrigine;
    private $numeroEpisode;
    private $idLicence;
    private $idPremiereEdition;
    private $auteurs;
    private $livrePaysOrigine;

    /*********************/
    /*   CONSTRUCTEUR    */
    /*********************/
    public function __construct() {
        $this->auteurs = array();
        $this->livrePaysOrigine = new LivrePays();
    }
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
    public function getAuteurs()
    {
        return $this->auteurs;
    }

    public function getLivrePaysOrigine()
    {
        return $this->livrePaysOrigine;
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
    public function setLivrePaysOrigine($valeur)
    {
         $this->livrePaysOrigine = $valeur;
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

    public function setAuteur($idAuteur) {
        $this->auteurs[] = $idAuteur;
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
        $stmt = $bdd->query($requete); 
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
        $this->id = $bdd->lastInsertId();
    } 

    public function ajoutAuteur($bdd, $idAuteur) {
        $requete = "INSERT INTO li_livre_auteur_t ("
        . "IdLivre "
        . ", IdAuteur "
        . ") VALUES( " 
        . " " . $this->id . " "
        . ", " . $idAuteur . " "
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
        $requete = "SELECT L.Id, L.IdSerie, L.NumeroEpisode, L.IdLicence, L.IdPremiereEdition, L.IdPaysOrigine "
            . ", LP.Id AS IdLivrePays, LP.Nom as NomLivre "

            . "FROM li_livre_t L "
            . "INNER JOIN li_livre_pays_t LP ON LP.IdPays = L.IdPaysOrigine AND LP.IdLivre = L.Id "

            . "WHERE L.Id = " . $this->id . " "
            . "LIMIT 0,1"
            ;
        $stmt = $bdd->query($requete)->fetch();
        $this->setDatas($stmt);

        $datasLivresPays = array();
        $datasLivresPays['Id'] = $stmt['IdLivrePays'];
        $datasLivresPays['IdLivre'] = $stmt['Id'];
        $datasLivresPays['Idpays'] = $stmt['IdPaysOrigine'];
        $datasLivresPays['Nom'] = $stmt['NomLivre'];
        $livrePays = new LivrePays();
        $livrePays->setDatas($datasLivresPays);
        $this->setLivrePaysOrigine($livrePays);

    }

    /*********************/
    /*       AUTRE       */
    /*********************/
}