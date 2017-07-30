<?php include_once('../../../config/parametres.php'); ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ajouter un pays</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>
  <body>
  <div id="message" class="container"></div>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

  <h1>Formulaire pour ajouter un pays</h1>
  <form 
    id="form_pays_ajout" 
    action="../../../scripts/global/add_pays.php" 
    method="post" 
    class="col-md-offset-1 col-md-10"
    >
    <?php include_once('../../forms/global/add_pays.php'); ?>
    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
  </form>

  <div class="clearfix"></div>
  <br/>
  <a href="../payss.php">Retour aux livres</a>
  <input id=getNom type="hidden" value="<?php echo $getNom; ?>" />

  <?php include_once('../../../layout/javascript.php'); ?>
  <script type="text/javascript" >
  $(document).ready(function(){
    console.log("coucou");

    $("#message").html('');
    var contenuMessage = $("#getNom").val();
    $("#message").html("Le pays " + contenuMessage + "est bien enregistré");
    $("#message").slideDown(function(){
      setTimeout(function(){
      $("#message").fadeOut('slow');
      $("#message").html('');
    }, 15000);
  });

  </script>
  </body>
</html