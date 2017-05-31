<?php
	include_once('../../config/parametres.php');
  require_once("../../classes/li/editeur.php");

	$idPays = '';
	$nom="";	

	if(isset($_POST['idPays'])){
		$idPays = $_POST['idPays'];
	}
	if(isset($_POST['nom'])){
		$nom = $_POST['nom'];
	}

	//On s'occupe du livre
	$editeur = new Editeur();
	$editeur->setIdPays($idPays);
	$editeur->setnom($nom);

	$editeur->ajoutEditeur($bdd);

	header('Location:../../views/pages/li/editeur_ajout.php?nom=' . $nom);
