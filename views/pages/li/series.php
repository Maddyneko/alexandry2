<?php include_once('../../../config/parametres.php'); ?>
<?php
    include_once('../../../classes/li/series.php');
    $series = new Series();
    $series->setSeries($bdd);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Series - Alexandry</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>

  <body>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>
    <div class="col-md-12">
        <?php foreach($series->getSeries() as $element) { ?>
        <div class="col-md-3">
            <div class="col-md-12 col-md-offset-1 panel panel-default">
                <a href = "serie.php?id=<?php echo $element->getId(); ?>">
                  <p><?php echo $element->getNom(); ?></p>
                </a>
            </div>
        </div>
        <?php } ?>
        <div class="clearfix"></div>
        <a href="<?php echo $host; ?>/views/pages/li/serie_ajout.php">Ajouter une série</a>
 
    </div>
    <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html>