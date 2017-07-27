<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/element.php');


class Serie extends Element{


	private $id;
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

	public function getNom(){
		return $this->nom;
	}

	/*Setters*/
	public function setId($valeur)
	{
		 $this->id = $valeur;
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

		if (isset($data['Nom'])) {
			$this->nom = $data['Nom'];
		}
	}

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function getSerieBd($bdd)
	{
		$requete = "SELECT * "
			. "FROM li_serie_t "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"
			; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	public function ajoutSerie($bdd)
	{
		$requete = "INSERT INTO li_serie_t (Nom) VALUES( " 
		. $bdd->quote($this->nom) . " "
		. ") "
		;
		$bdd->query($requete); 
		} 

	public function modifierBd($bdd)
	{
		$requete = "UPDATE li_serie_t SET "
			. "Nom = " . $bdd->quote($this->nom). " "
			. " WHERE Id = " . $this->id . " "
			;
		$bdd->query($requete); 
	} 

	public function getSerieDetailBd($bdd)
	{
		$requete = "SELECT Nom "
			. "FROM li_serie_t S "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}