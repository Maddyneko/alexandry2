<?php include_once('../../../config/parametres.php'); ?>
<?php
  include_once('../../../classes/global/payss.php');
  $payss = new Payss();
  $payss->setPayss($bdd);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ajouter une personne</title>

    <!-- Bootstrap -->
    <?php include_once('../../../layout/styles.php'); ?>

  </head>
  <body>
 	<div id="message" class="container"></div>
    <?php include_once('../../../layout/header.php'); ?>
    <?php include_once('../../../layout/menu.php'); ?>

	<h1>Formulaire pour ajouter une personne</h1>
	<form id="form_pays_ajout" action="../../../scripts/global/add_personne.php" method="post" class="col-md-offset-1 col-md-10">
		<?php include_once('../../forms/global/add_personne.php'); ?>
    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
	</form>

	<input id=getNom type="hidden" value="<?php echo $getNom; ?>" />


  <?php include_once('../../../layout/javascript.php'); ?>
  <script type="text/javascript" >
  console.log("coucou");
  $(document).ready(function(){

  	$("#message").html('');
  	var contenuMessage = $("#getNom").val();
	$("#message").html(contenuMessage + "est bien enregistré");
	$("#message").slideDown(function(){
		setTimeout(function(){
			$("#message").fadeOut('slow');
			$("#message").html('');
		}, 15000);

    $("#nompersonne").blur(function(){
      var nomPersonne = $("#nompersonne").val();
      var tabNomPersonne = nomPersonne.split(" ");
      console.log(tabNomPersonne.length);
      var taille = tabNomPersonne.length;
      taille = taille - 1;
      var nomTri = tabNomPersonne[taille];
      var nomSeo = tabNomPersonne[taille];
      for (i = 0; i < taille; i++) {
        nomTri = nomTri + " " + tabNomPersonne[i];
        nomSeo = nomSeo + "-" + tabNomPersonne[i];

      }
      $("#nomtri").val(nomTri);
      
    });
	});

  });
  </script>
  </body>
</html