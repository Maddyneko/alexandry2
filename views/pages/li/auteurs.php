<?php include_once('../../../config/parametres.php'); ?>
<?php
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
    <title>Auteurs - Alexandry</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>

  <body>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>
    <div class="col-md-12">
        <?php foreach($auteurs->getAuteurs() as $element) { ?>
        <div class="col-md-3">
            <div class="col-md-12 col-md-offset-1 panel panel-default">
                <a href = "../global/personne.php?id=<?php echo $element->getIdPersonne(); ?>">
                  <p><?php echo $element->getNom(); ?></p>
                </a>
            </div>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
        <a href="<?php echo $host; ?>/views/pages/li/auteur_ajout.php">Ajouter un auteur</a>
 
    </div>
    <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html>