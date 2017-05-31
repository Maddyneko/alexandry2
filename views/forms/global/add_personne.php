    <div class="col-md-12 form-group">
      <label for="nompersonne">Nom</label>
      <input type="text" class="form-control" id="nompersonne" name="nompersonne" placeholder="">
    </div>
    
    <div class="col-md-12 form-group">
      <label for="nomtri">Nom pour le tri</label>
      <input type="text" class="form-control" id="nomtri" name="nomtri" placeholder="">
    </div>

    <div class="col-md-12 form-group">
      <label for="dateNaissance">Date de naissance</label>
      <input type="date" class="form-control" id="dateNaissance" name="dateNaissance" placeholder="">
    </div>

    <div class="col-md-12 form-group">
      <label for="nomSeo">Nom Seo</label>
      <input type="date" class="form-control" id="nomSeo" name="nomSeo" placeholder="">
    </div>

    <div class="col-md-12 form-group">
      <label for="nationalite">Choisir une nationalité</label>
      <select class="form-control" id="nationatite" name="nationalite">
      <?php foreach($payss->getPayss() as $pays) { ?>
        <option value="<?php echo $pays->getId(); ?>"><?php echo $pays->getAdjectifPays(); ?></option>
      <?php } ?>
      }
    </div>
    <p></p>
    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
    
 