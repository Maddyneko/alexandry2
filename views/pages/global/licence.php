<?php include_once('../../../config/parametres.php'); ?>
<?php $idElement = '';
  if(isset($_GET['id'])){
    $idElement = $_GET['id'];
  }
  else{
    header('Location:../../../index.php');
  }
  include_once('../../../classes/global/licence.php');
  $licence = new Licence();
  $licence->setId($idElement);
  $licence->getLicenceBd($bdd);
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

    <div class="col-md-12">
      <h1><?php echo $licence->getlicence(); ?></h1>
    </div>

  <?php include_once('../../../layout/javascript.php'); ?>

  </body>
</html>