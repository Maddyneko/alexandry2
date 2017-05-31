<?php
	include_once('../../config/parametres.php');
  require_once("../../classes/global/personne.php");

	$nompersonne = '';
	$nomtri="";	

	if(isset($_POST['nompersonne'])){
		$nompersonne = $_POST['nompersonne'];
	}
	if(isset($_POST['nomtri'])){
		$nomtri = $_POST['nomtri'];
	}
	if(isset($_POST['nationalite'])){
		$idNationalite = $_POST['nationalite'];
	}
	if(isset($_POST['dateNaissance'])){
		$dateNaissance = $_POST['dateNaissance'];
	}
	if(isset($_POST['nomSeo'])){
		$nomSeo = $_POST['nomSeo'];
	}
	//On s'occupe du livre
	$personne = new Personne();
	$personne->setNom($nompersonne);
	$personne->setNomTri($nomtri);
	$personne->setIdNationalite($idNationalite);
	$personne->setDateNaissance($dateNaissance);
	$personne->setNomSeo($nomSeo);

	$personne->ajoutPersonne($bdd);

	header('Location:../../views/pages/global/personne_ajout.php?nom=' . $nompersonne);
