<?php


class Licence{


	private $Id;
	private $licence;

/*********************/
/*   CONSTRUCTEUR    */
/*********************/


/*********************/
/* GETTERS & SETTERS */
/*********************/

/*Getters*/

	public function getId() 
	{
		return $this->Id;
	}

	public function getlicence()
	{
		return $this->licence;
	}

/*Setters*/
	public function setId($valeur)
	{
		 $this->Id = $valeur;
	}

	public function setlicence($valeur)
	{
		 $this->licence = $valeur;
	}

	public function setDatas($data)
	{
		if (isset($data['Id'])) {
			$this->Id = $data['Id']; 		
		}
		if (isset($data['licence']))
		{
			$this->licence = $data['licence']; 
		}	
	}

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function getLicenceBd($bdd)
	{
		$requete = "SELECT * FROM x_licence_t WHERE Id = ". $this->Id . " LIMIT 0,1"; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

	public function ajoutLicence($bdd)
	{
		$requete = "INSERT INTO x_licence_t (licence) VALUES( " . $bdd->quote($this->licence) . " ) ";
		$bdd->query($requete); 
	} 

	public function modifierBd($bdd)
	{
		$requete = "UPDATE x_licence_t SET licence = " . $bdd->quote($this->licence). " WHERE Id = " . $this->Id . ") ";
		$bdd->query($requete); 
	} 

	public function getLicenceDetailBd($bdd){
		$requete = "SELECT  licence FROM x_licence_t WHERE Id = $this->Id LIMIT 0,1"; 
		$stmt = $bdd->query($requete)->fetch(); 
		$this->setDatas($stmt);
	}

/*********************/
/*		 AUTRE 	   	 */
/*********************/
}