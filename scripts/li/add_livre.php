<?php
    include_once('../../config/parametres.php');
    require_once("../../classes/li/livre.php");
    require_once("../../classes/li/livrePays.php");

    $idLicence = ""; 
    $idPaysOrigine = ""; 
    $nomLivrePays = ""; 
    $idPremiereEdition = 1; 
    $idSerie = ""; 
    $numeroEpisode = ""; 
    $idAuteur = ""; 

    if (isset($_POST['idLicence'])) {
        $idLicence = $_POST['idLicence'];
    }
    if (isset($_POST['idPaysOrigine'])) {
        $idPaysOrigine = $_POST['idPaysOrigine'];
    }
    if (isset($_POST['nomLivrePays'])) {
        $nomLivrePays = $_POST['nomLivrePays'];
    }
    if (isset($_POST['idPremiereEdition'])) {
        $idPremiereEdition = $_POST['idPremiereEdition'];
    }
    if (isset($_POST['idSerie'])) {
        $idSerie = $_POST['idSerie'];
    }
    if (isset($_POST['numeroEpisode'])) {
        $numeroEpisode = $_POST['numeroEpisode'];
    }

    if (isset($_POST['idAuteur'])) {
        $idAuteur = $_POST['idAuteur'];
    }
    //On s'occupe du livre
    $livre = new Livre();
    $livre->setIdLicence($idLicence);
    $livre->setIdPaysOrigine($idPaysOrigine);
    $livre->setIdPremiereEdition($idPremiereEdition);
    $livre->setIdSerie($idSerie);
    $livre->setNumeroEpisode($numeroEpisode);
    $livre->ajoutLivre($bdd);

    $idLivre = $bdd->lastInsertId();
    

    $livrePays = new LivrePays();
    $livrePays->setIdLivre($idLivre);
    $livrePays->setIdpays($idPaysOrigine);
    $livrePays->setNom($nomLivrePays);
    $livrePays->setNom($nomLivrePays);

    $livrePays->ajoutLivrePays($bdd);

    $livre->ajoutAuteur($bdd, $idAuteur);

    header('Location:../../views/pages/li/livre_ajout.php?nom=' . $nom);
