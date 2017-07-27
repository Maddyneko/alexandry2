<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/serie.php');


class Series{

	private $series;

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
	public function getSeries()
	{
		return $this->series;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	
	public function setSeries($bdd)
	{
		$requete = "SELECT * FROM li_serie_t ";
		foreach ($bdd->query($requete) as $stmt){
			$serie = new Serie();
			$serie->setDatas($stmt);
			$this->series[] = $serie;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}