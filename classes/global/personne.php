<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/element.php');


class Personne extends Element{


	private $Id;
	private $Nom;
	private $NomTri;
	private $idNationalite;
	private $nationalite;
	private $dateNaissance;
	private $nomSeo;

/*********************/
/*   CONSTRUCTEUR    */
/*********************/


/*********************/
/* GETTERS & SETTERS */
/*********************/

	/*Getters*/
	public function getId(){
		return $this->Id;
	}

	public function getNom(){
		return $this->Nom;
	}

	public function getNomTri(){
		return $this->NomTri;
	}

	public function getIdNationalite()
	{
		return $this->idNationalite;
	}

	public function getNationalite()
	{
		return $this->nationalite;
	}

	public function getDateNaissance()
	{
		return $this->dateNaissance;
	}

	public function getNomSeo()
	{
		return $this->nomSeo;
	}

	/*Setters*/
	public function setId($valeur)
	{
		 $this->Id = $valeur;
	}

	public function setNom($valeur)
	{
		 $this->Nom = $valeur;
	}

	public function setNomTri($valeur)
	{
		 $this->NomTri = $valeur;
	}

	public function setIdNationalite($valeur)
	{
		$this->idNationalite = $valeur;
	}

	public function setNationalite($valeur)
	{
		$this->nationalite = $valeur;
	}

	public function setDateNaissance($valeur)
	{
		$this->dateNaissance = $valeur;
	}

	public function setNomSeo($valeur)
	{
		$this->nomSeo = $valeur;
	}

	public function setDatas($data)
	{
		if (isset($data['Id'])) {
			$this->Id = $data['Id'];
		}		
		if (isset($data['Nom'])) {
			$this->Nom = $data['Nom'];
		}
		if (isset($data['NomTri'])) {
			$this->NomTri = $data['NomTri'];
		}
		if (isset($data['IdNationalite'])) {
			$this->idNationalite = $data['IdNationalite'];
		}
		if (isset($data['Nationalite'])) {
			$this->nationalite = $data['Nationalite'];
		}
		if (isset($data['DateNaissance'])) {
			$this->dateNaissance = $data['DateNaissance'];
		}
		if (isset($data['NomSeo'])) {
			$this->nomSeo = $data['NomSeo'];
		}
	}

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function getPersonneBd($bdd)
	{
		$requete = "SELECT P.* "
			.", PA.AdjectifPays AS Nationalite "
			. "FROM x_personne_t P "
			. "LEFT JOIN x_pays_t PA "
			. "ON P.IdNationalite = PA.Id "
			. "WHERE P.Id = " . $this->Id . " "
			. "LIMIT 0, 1"
			; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	public function ajoutPersonne($bdd)
	{
		$requete = "INSERT INTO x_personne_t (Nom, NomTri, IdNationalite, DateNaissance, NomSeo) VALUES( " 
		. $bdd->quote($this->Nom) . " "
		. ", " . $bdd->quote($this->NomTri) . " "
		. ", " . ($this->idNationalite != '' ? $this->idNationalite : "NULL") . " "
		. ", " . ($this->dateNaissance != '' ? $bdd->quote($this->dateNaissance) : "NULL") . " "
		. ", " . ($this->nomSeo != '' ? $bdd->quote($this->nomSeo) : "NULL") . " "

		. ") "
		;
		$bdd->query($requete); 
		} 

	public function modifierBd($bdd)
	{
		$requete = "UPDATE x_personne_t SET "
			. "Nom = " . $bdd->quote($this->Nom) . " "
			. ", NomTri = " . $bdd->quote($this->NomTri). " "
			. ", IdNationalite = " . ($this->idNationalite != '' ? $this->idNationalite : "NULL") . " "
			. ", DateNaissance = " . ($this->dateNaissance != '' ? $bdd->quote($this->dateNaissance) : "NULL") . " "
			. ", NomSeo = " . ($this->nomSeo != '' ? $bdd->quote($this->nomSeo) : "NULL") . " "

			. " WHERE Id = " . $this->Id . " "
			;
		$bdd->query($requete); 
	} 

	public function getPersonneDetailBd($bdd)
	{
		$requete = "SELECT  P.Nom, P.NomTri, P.IdNationalite, P.DateNaissance, P.NomSeo "
			. ", PA.AdjectifPays AS Nationalite "
			. "FROM x_personne_t P "
			. "LEFT JOIN x_pays_t PA "
			. "ON P.IdNationalite = PA.Id "
			. "WHERE Id = " . $this->Id . " "
			. "LIMIT 0, 1"; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}