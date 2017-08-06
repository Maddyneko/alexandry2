<?php
include_once($racine . 'classes/global/licence.php');


class Licences{

	private $Licences;

	/*********************/
	/*   CONSTRUCTEUR    */
	/*********************/
	public function __construct()
	{
		$this->Licences = array();
	}

	/*********************/
	/* GETTERS & SETTERS */
	/*********************/

	/*Getters*/
	public function getLicences()
	{
		return $this->Licences;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function setLicences($bdd){
		$requete = "SELECT * FROM x_licence_t";
		foreach ($bdd->query($requete) as $stmt){
			$licence = new Licence();
			$licence->setDatas($stmt);
			$this->Licences[] = $licence;
		}
	}

/*********************/
/*		 AUTRE 	   	 */
/*********************/
}