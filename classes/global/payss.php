<?php
include_once($racine . 'classes/global/pays.php');


class Payss{

private $Payss;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->Payss = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getPayss()
	{
		return $this->Payss;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function setPayss($bdd)
	{
		$requete = "SELECT * FROM x_pays_t";
		foreach ($bdd->query($requete) as $stmt){
			//print_r($stmt);
			$pays = new Pays();
			$pays->setDatas($stmt);
			$this->Payss[] = $pays;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}