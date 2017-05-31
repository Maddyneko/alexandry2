<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/element.php');


class Editeur extends Element{


	private $id;
	private $idPays;
	private $nom;

/*********************/
/*   CONSTRUCTEUR    */
/*********************/


/*********************/
/* GETTERS & SETTERS */
/*********************/

	/*Getters*/
	public function getId(){
		return $this->id;
	}

	public function getIdPays(){
		return $this->idPays;
	}

	public function getNom(){
		return $this->nom;
	}

	/*Setters*/
	public function setId($valeur)
	{
		 $this->id = $valeur;
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
		if (isset($data['IdPays'])) {
			$this->idPays = $data['Nom'];
		}
		if (isset($data['Nom'])) {
			$this->nom = $data['Nom'];
		}
	}

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function getEditeurBd($bdd)
	{
		$requete = "SELECT * "
			. "FROM li_editeur_t "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"
			; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	public function ajoutEditeur($bdd)
	{
		$requete = "INSERT INTO li_editeur_t (IdPays, Nom) VALUES( " 
		. $this->idPays . " "
		. ", " . $bdd->quote($this->nom) . " "
		. ") "
		;
		$bdd->query($requete); 
		} 

	public function modifierBd($bdd)
	{
		$requete = "UPDATE li_editeur_t SET "
			. "IdPays = " . $this->idPays . " "
			. ", Nom = " . $bdd->quote($this->nom). " "
			. " WHERE Id = " . $this->id . " "
			;
		$bdd->query($requete); 
	} 

	public function getEditeurDetailBd($bdd)
	{
		$requete = "SELECT  IdPays, Nom "
			. "FROM li_editeur_t P "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}