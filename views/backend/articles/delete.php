<?php
include '../../../header.php';

$numArt = $_GET ["numArt"];
$dtCreArt = sql_select("ARTICLE", "dtCreArt", "numArt = $numArt")[0]['dtCreArt'];
$libTitrArt = sql_select("ARTICLE", "libTitrArt", "numArt = $numArt")[0]['libTitrArt'];
$libChapoArt = sql_select("ARTICLE", "libChapoArt", "numArt = $numArt")[0]['libChapoArt'];
$libAccrochArt = sql_select("ARTICLE", "libAccrochArt", "numArt = $numArt")[0]['libAccrochArt'];
$parag1Art = sql_select("ARTICLE", "parag1Art", "numArt = $numArt")[0]['parag1Art'];
$libSsTitr1Art = sql_select("ARTICLE", "libSsTitr1Art", "numArt = $numArt")[0]['libSsTitr1Art'];
$parag2Art = sql_select("ARTICLE", "parag2Art", "numArt = $numArt")[0]['parag2Art'];
$libSsTitr2Art = sql_select("ARTICLE", "libSsTitr2Art", "numArt = $numArt")[0]['libSsTitr2Art'];
$parag3Art = sql_select("ARTICLE", "parag3Art", "numArt = $numArt")[0]['parag3Art'];
$libConclArt = sql_select("ARTICLE", "libConclArt", "numArt = $numArt")[0]['libConclArt'];
$urlPhotArt = sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt'];
$numThem = sql_select("ARTICLE", "numThem", "numArt = $numArt")[0]['numThem'];



?>

<!--Bootstrap form to delete an article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete an article -->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="dtCreArt">Date et heure de création de l'article</label>
                    <input id="dtCreArt" class="form-control" type="text" name="dtCreArt" value="<?php echo($dtCreArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="dtCreArt" value="<?php echo($libTitrArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt" value="<?php echo($libChapoArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo($libAccrochArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art" value="<?php echo($parag1Art) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo($libSsTitr1Art) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art" value="<?php echo($parag2Art) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo($libSsTitr2Art) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art" value="<?php echo($parag3Art) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt" value="<?php echo($libConclArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="urlPhotArt">URL photo</label>
                    <input id="urlPhotArt" class="form-control" type="text" name="urlPhotArt" value="<?php echo($urlPhotArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="numThem">Num them</label>
                    <input id="numThem" class="form-control" type="text" name="numThem" value="<?php echo($numThem) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                </div>
            </form>
        </div>
    </div>
</div>

