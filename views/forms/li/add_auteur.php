<div class="col-md-9 form-group">
    <label for="idPersonne">Choisir un auteur</label>
    <div class="col-md-12 form-group">
        <select class="form-control" id="idPersonne" name="idPersonne">
            <?php foreach($personnes->getPersonnes() as $personne) { ?>
            <option value="<?php echo $personne->getId(); ?>"><?php echo $personne->getNom(); ?></option>
            <?php } ?>
        </select>
    </div>
</div>