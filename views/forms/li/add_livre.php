    
    <div class="panel panel-default">
        <div class="panel-heading">Information sur le livre</div>
        <div class="panel-body">
            <div class="col-md-9 form-group">
              <label for="nomLivrePays">Titre d'origine</label>
              <input type="text" class="form-control" id="nomLivrePays" name="nomLivrePays" placeholder="">
            </div>

            <div class="col-md-3 form-group">
                <label for="idPaysOrigine">Choisir le pays d'origine</label>
                <select class="form-control" id="idPaysOrigine" name="idPaysOrigine">
                    <?php foreach($payss->getPayss() as $pays) { ?>
                    <option value="<?php echo $pays->getId(); ?>"><?php echo $pays->getNomPays(); ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>

    <div class="col-md-12 form-group">
        <label for="idLicence">Choisir une licence</label>
        <select class="form-control" id="idLicence" name="idLicence">
            <?php foreach($licences->getLicences() as $licence) { ?>
            <option value="<?php echo $licence->getId(); ?>"><?php echo $licence->getlicence(); ?></option>
            <?php } ?>
        </select>
    </div>



    <!--<label for="idPremiereEdition">Choisir la première édition</label>
    <div class="col-md-12 form-group">
        <select class="form-control" id="idPremiereEdition" name="idPremiereEdition">
            <?php //foreach($editeurs->getEditeurs() as $editeur) { ?>
            <option value="<?php //echo $editeur->getId(); ?>"><?php //echo $editeur->getNom(); ?></option>
            <?php //} ?>
        </select>
    </div>
    -->

    <div class="col-md-12 form-group">
        <label for="idSerie">Choisir la série</label>
        <select class="form-control" id="idSerie" name="idSerie">
            <?php foreach($series->getSeries() as $serie) { ?>
            <option value="<?php echo $serie->getId(); ?>"><?php echo $serie->getNom(); ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="col-md-9 form-group">
        <label for="numeroEpisode">Episode n°</label>
        <input type="number" class="form-control" id="numeroEpisode" name="numeroEpisode" placeholder="">
    </div>
