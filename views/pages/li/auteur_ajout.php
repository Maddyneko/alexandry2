<?php include_once('../../../config/parametres.php'); ?>
<?php
  include_once('../../../classes/global/personnes.php');
  $personnes = new Personnes();
  $personnes->setPersonnesNonAuteur($bdd);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ajouter un auteur</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>
  <body>
 	<div id="message" class="container"></div>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

	<h1>Formulaire pour ajouter un auteur</h1>
	<form id="form_pays_ajout" action="../../../scripts/li/add_auteur.php" method="post" class="col-md-offset-1 col-md-10">
		<?php include_once('../../forms/li/add_auteur.php'); ?>
    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
	</form>

  <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html