<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/editeur.php');


class Editeurs{

	private $editeurs;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->editeurs = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getEditeurs()
	{
		return $this->editeurs;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	
	public function setEditeurs($bdd)
	{
		$requete = "SELECT * FROM li_editeur_t ";
		foreach ($bdd->query($requete) as $stmt){
			$editeur = new Editeur();
			$editeur->setDatas($stmt);
			$this->editeurs[] = $editeur;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}