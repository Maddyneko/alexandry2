<?php
include_once($racine . 'classes/global/personne.php');


class Personnes{


private $Personnes;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->Personnes = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getPersonnes()
	{
		return $this->Personnes;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function setPersonnes($bdd)
	{
		$requete = "SELECT * FROM x_personne_t";
		foreach ($bdd->query($requete) as $stmt){
			$personne = new Personne();
			$personne->setDatas($stmt);
			$this->Personnes[] = $personne;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}