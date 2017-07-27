<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/element.php');


class Auteur extends Element{


	private $id;
	private $IdPersonne;
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
		return $this->id;
	}

	public function getIdPersonne(){
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

	public function setIdPersonne($valeur)
	{
		 $this->IdPersonne = $valeur;
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
			$this->id = $data['Id'];
		}		
		if (isset($data['IdPersonne'])) {
			$this->IdPersonne = $data['IdPersonne'];
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
	public function getAuteurBd($bdd)
	{
		$requete = "SELECT * "
			. "FROM li_auteur_t A "
			. "INNER JOIN x_personne_t P "
			. "ON A.IdPersonne = P.Id "
			. "LEFT JOIN x_pays_t PA "
			. "ON P.IdNationalite = PA.Id "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"
			; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	public function ajoutAuteur($bdd)
	{
		$requete = "INSERT INTO li_auteur_t (IdPersonne) VALUES( " 
		. $this->IdPersonne . " "
		. ") "
		;
		$bdd->query($requete); 
		} 

	public function modifierBd($bdd)
	{
		$requete = "UPDATE li_auteur_t SET "
			. "IdPersonne = " . $this->IdPersonne . " "
			. " WHERE Id = " . $this->id . " "
			;
		$bdd->query($requete); 
	} 

	public function getAuteurDetailBd($bdd)
	{
		$requete = "SELECT A.IdPersonne, P.Nom, P.NomTri, P.IdNationalite, P.DateNaissance, P.NomSeo "
			. "FROM li_auteur_t A "
			. "INNER JOIN x_personne_t P "
			. "ON A.IdPersonne = P.Id "
			. "LEFT JOIN x_pays_t PA "
			. "ON P.IdNationalite = PA.Id "
			. "WHERE Id = " . $this->id . " "
			. "LIMIT 0, 1"
			;
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}