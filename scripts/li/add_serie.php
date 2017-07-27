<?php
	include_once('../../config/parametres.php');
  require_once("../../classes/li/serie.php");

	$nom="";	

	if(isset($_POST['nom'])){
		$nom = $_POST['nom'];
	}

	//On s'occupe du livre
	$serie = new Serie();
	$serie->setNom($nom);

	$serie->ajoutSerie($bdd);

	header('Location:../../views/pages/li/serie_ajout.php?nom=' . $nom);
