function majNomForm(nomChamp, nomChampSeo, nomChampTri) {
    var valueChamp = $("#" + nomChamp).val();
    var tabChamp = valueChamp.split(" ");
    var taille = tabChamp.length;
    taille = taille - 1;
    var nomTri = getSeoName(tabChamp);

    $("#" + nomChampTri).val(nomTri);
    $("#" + nomChampSeo).val(nomTri);

}

function getSeoName(taille, tabChamp) {

    var valeur = '';
    valeur = tabChamp[taille];

    for (i = 0; i < taille; i++) {
        valeur = valeur + "-" + tabChamp[i];
    }
    return valeur;
}

function getTriName() {
    var valeur = '';
    valeur = tabChamp[taille];

    for (i = 0; i < taille; i++) {
        valeur = valeur + " " + tabChamp[i];
    }
    return valeur;
}