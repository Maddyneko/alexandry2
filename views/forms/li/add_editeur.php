    <div class="col-md-9 form-group">
      <label for="nom">Nom Editeur</label>
      <input type="text" class="form-control" id="nom" name="nom" placeholder="">
    </div>
    
    <div class="col-md-12 form-group">
      <label for="idPays">Choisir un pays</label>
      <select class="form-control" id="idPays" name="idPays">
      <?php foreach($payss->getPayss() as $pays) { ?>
        <option value="<?php echo $pays->getId(); ?>"><?php echo $pays->getNomPays(); ?></option>
      <?php } ?>
      </select>
    </div>

    <div class="col-md-12">
      <input class="btn btn-primary" type="submit" value="Ajouter" / >
    </div>
