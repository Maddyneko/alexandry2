<?php


class LivrePays{

    private $id;
    private $idLivre;
    private $idPays;
    private $nom;

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
    public function getIdLivre()
    {
        return $this->idLivre;
    }
    public function getIdPays()
    {
        return $this->idPays;
    }
    public function getNom()
    {
        return $this->nom;
    }

    /*Setters*/
    public function setId($valeur)
    {
         $this->id = $valeur;
    }
    public function setIdLivre($valeur)
    {
         $this->idLivre = $valeur;
    }
    public function setIdPays($valeur)
    {
        $this->idPays = $valeur;
    }
    public function setNom($valeur)
    {
         $this->nom = $valeur;
    }

    public function setDatas($data)
    {
        if (isset($data['Id'])) {
            $this->id = $data['Id'];
        }
        if (isset($data['IdLivre'])) {
            $this->idLivre = $data['IdLivre'];
        }
        if (isset($data['IdPays'])) {
            $this->idPays = $data['IdPays'];
        }
        if (isset($data['Nom'])) {
            $this->nom = $data['Nom'];
        }
    }

    /*********************/
    /*       BDD         */
    /*********************/
    public function getLivrePaysBd($bdd) {
        $requete = "SELECT * "
            . "FROM li_livre_pays_t "
            . "WHERE Id = ". $this->id . " "
            . "LIMIT 0, 1 "
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    public function ajoutLivrePays($bdd) {
        $requete = "INSERT INTO li_livre_pays_t ("
        . "IdLivre "
        . ", IdPays "
        . ", Nom "
        . ") VALUES( " 
        . " " . $this->idLivre . " "
        . ", " . $this->idPays . " "
        . ", " . $bdd->quote($this->nom) . " "
        . ") ";
        $bdd->query($requete);
    } 

    public function modifierBd($bdd) {
        $requete = "UPDATE li_livre_pays_t SET "
            . " IdLivre = " . $this->idLivre . " "
            . ", IdPays = " . $this->idPays . " "
            . ", Nom = " . $bdd->quote($this->nom) . " "
            . "WHERE Id = " . $this->id . " ) ";
        $bdd->query($requete); 
    }

    public function getLivrePaysDetailBd($bdd) {
        $requete = "SELECT Id, IdLivre, IdPays, Nom "
            . "FROM li_livre_pays_t "
            . "WHERE Id = " . $this->id . " "
            . "LIMIT 0, 1"
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    /*********************/
    /*       AUTRE       */
    /*********************/
}