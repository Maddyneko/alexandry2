<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/auteur.php');


class Auteurs{

	private $auteurs;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->series = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getAuteurs()
	{
		return $this->series;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	
	public function setAuteurs($bdd)
	{
		$requete = "SELECT * "
			. "FROM li_auteur_t A "
			. "INNER JOIN x_personne_t P "
			. "ON A.IdPersonne = P.Id "
			. "LEFT JOIN x_pays_t PA "
			. "ON P.IdNationalite = PA.Id "
			;
		foreach ($bdd->query($requete) as $stmt){
			$auteur = new Auteur();
			$auteur->setDatas($stmt);
			$this->auteurs[] = $auteur;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}