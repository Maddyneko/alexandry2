<?php
	include_once('../../config/parametres.php');
  require_once("../../classes/global/licence.php");

	$licence = '';

	if(isset($_POST['licence'])){
		$licence = $_POST['licence'];
	}


	//On s'occupe du livre
	$lice = new Licence();
	$lice->setlicence($licence);

	$lice->ajoutLicence($bdd);

	
	header('Location:../../views/pages/global/licence_ajout.php?nom=' . $licence);
