<?php include_once('../../../config/parametres.php'); ?>
<?php
  include_once('../../../classes/global/licences.php');
  $licences = new Licences();
  $licences->setLicences($bdd);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title></title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>
  <body>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

    <?php   foreach($auteurs->geAuteurs() as $element) { ?>
    <a href = "pays.php?id=<?php echo $element->getId(); ?>">   
      <p>Id : <?php echo $element->getId(); ?></p>
      <p>Nom : <?php echo $element->getNom(); ?></p>
  <?php } ?>


  <a href="/alexandry/views/forms/global/add_auteur.php">Ajouter un auteur</a>

  <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html>