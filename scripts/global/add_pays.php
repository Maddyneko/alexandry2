<?php
	include_once('../../config/parametres.php');
  	require_once("../../classes/global/pays.php");

	$nompays = '';
	$initialespays="";
	$languepays="";
	

	if(isset($_POST['nompays'])){
		$nompays = $_POST['nompays'];
	}
	if(isset($_POST['initialespays'])){
		$initialespays = $_POST['initialespays'];
	}
	if(isset($_POST['languepays'])){
		$languepays = $_POST['languepays'];
	}
	if(isset($_POST['adjectifpays'])){
		$adjectifPays = $_POST['adjectifpays'];
	}

	//On s'occupe du livre
	$pays = new Pays();
	$pays->setnomPays($nompays);
	$pays->setinitialesPays($initialespays);
	$pays->setlangue($languepays);
	$pays->setAdjectifPays($adjectifPays);

	$pays->ajoutPays($bdd);

	
	header('Location:../../views/pages/global/pays_ajout.php?retour=ok&nom=' . $nompays);
