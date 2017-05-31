<?php include_once('../../../config/parametres.php'); ?>
<?php $idElement = '';
	if (isset($_GET['id'])) {
		$idElement = $_GET['id'];
	}	else {
		header('Location:../../../index.php');
  }
  include_once('../../../classes/global/payss.php');
  $pays = new Pays();
  $pays->setId($idElement);
  $pays->getPaysBd($bdd);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $pays->getNomPays(); ?> - Alexandry</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>

  <body>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

    <div class="col-md-10 col-md-offset-1 panel panel-default">
        <h1><?php echo $pays->getNomPays(); ?> (<?php echo $pays->getInitialesPays(); ?>)</h1>
        <p>Langue : <?php echo $pays->getLangue(); ?></p>
    </div>

    <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html>