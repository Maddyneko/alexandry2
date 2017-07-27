<?php
	include_once('../../config/parametres.php');
	require_once("../../classes/li/auteur.php");

	$idPersonne="";	

	if(isset($_POST['idPersonne'])){
		$idPersonne = $_POST['idPersonne'];
	}

	//On s'occupe du livre
	$auteur = new Auteur();
	$auteur->setIdPersonne($idPersonne);

	$auteur->ajoutAuteur($bdd);

	header('Location:../../views/pages/li/auteur_ajout.php?nom=' . $nom);
