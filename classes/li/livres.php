<?php
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/livre.php');
include_once('/datas/vol2/w4a149731/var/www/maddyneko.fr/htdocs/alexandry2/classes/li/livrePays.php');


class Livres{

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
	public function getLivres()
	{
		return $this->livres;
	}

	/*Setters*/

	/*********************/
	/*		 BDD 	   	 */
	/*********************/
	public function setLivres($bdd)
	{
		$requete = "SELECT L.Id, L.IdSerie, L.IdPaysOrigine, L.NumeroEpisode, L.NumeroEpisode, L.IdPremiereEdition " 
			. ", LP.Id AS IdLivrePays, LP.Nom as NomLivre "
			. "FROM li_livre_t L "
			. "INNER JOIN li_livre_pays_t LP ON LP.IdPays = L.IdPaysOrigine AND LP.IdLivre = L.Id "
			;
		foreach ($bdd->query($requete) as $stmt){
			$livre = new Livre();
			$livre->setDatas($stmt);

			$datasLivresPays = array();
			$datasLivresPays['Id'] = $stmt['IdLivrePays'];
			$datasLivresPays['IdLivre'] = $stmt['Id'];
			$datasLivresPays['Idpays'] = $stmt['IdPaysOrigine'];
			$datasLivresPays['Nom'] = $stmt['NomLivre'];
			$livrePays = new LivrePays();
			$livrePays->setDatas($datasLivresPays);
			$livre->setLivrePaysOrigine($livrePays);
			$this->livres[] = $livre;
		}
	}

	/*********************/
	/*		 AUTRE 	   	 */
	/*********************/
}