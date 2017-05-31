<?php


class Pays{

    private $id;

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

    /*Setters*/
    public function setId($valeur)
    {
         $this->Id = $valeur;
    }

    public function setDatas($data)
    {
        if (isset($data['Id'])) {
            $this->Id = $data['Id'];
        }
    }

    /*********************/
    /*       BDD         */
    /*********************/
    public function getLivreBd($bdd) {
        $requete = "SELECT * "
            . "FROM li_livre_t "
            . "WHERE Id = ". $this->Id . " "
            . "LIMIT 0, 1 "
            ;
        $stmt = $bdd->query($requete)->fetch(); 
        $this->setDatas($stmt);
    }

    public function ajoutLivre($bdd) {
        $requete = "INSERT INTO li_livre_t ("
        . ") VALUES( " 

        . ") ";
        $bdd->query($requete)->fetch(); 
    } 

    public function modifierBd($bdd) {
        $requete = "UPDATE li_livre_t SET "

            . "WHERE Id = " . $this->Id . " ) ";
        $bdd->query($requete)->fetch(); 
    }

    public function getLivrePaysDetailBd($bdd) {
        $requete = "SELECT  "
            . "FROM li_livre_t "
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