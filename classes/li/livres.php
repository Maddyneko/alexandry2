<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/global/pays.php');


class Payss{

	private $livres;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->livres = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getPayss()
	{
		return $this->livres;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function setLivres($bdd)
	{
		$requete = "SELECT * FROM li_livre_t";
		foreach ($bdd->query($requete) as $stmt){
			//print_r($stmt);
			$livre = new Livre();
			$livre->setDatas($stmt);
			$this->Livres[] = $livre;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}