<?php include_once('../../../config/parametres.php'); ?>
<?php
    include_once('../../../classes/global/payss.php');
    $payss = new Payss();
    $payss->setPayss($bdd);

    include_once('../../../classes/global/licences.php');
    $licences = new Licences();
    $licences->setLicences($bdd);


    include_once('../../../classes/li/series.php');
    $series = new Series();
    $series->setSeries($bdd);

    include_once('../../../classes/li/auteurs.php');
    $auteurs = new Auteurs();
    $auteurs->setAuteurs($bdd);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ajouter un livre</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>
  <body>
    <div id="message" class="container"></div>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

    <h1>Formulaire pour ajouter un livre</h1>
    <form id="form_pays_ajout" action="../../../scripts/li/add_livre.php" method="post" class="col-md-offset-1 col-md-10">
        <?php include_once('../../forms/li/add_livre.php'); ?>
    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
    </form>

  <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html