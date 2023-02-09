<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numArt = $_GET["numArt"];
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
// $urlPhotArt =sql_select("ARTICLE", "urlPhotArt", "numArt = $numArt")[0]['urlPhotArt']; Gérer le nom de l'URL
$numThem = sql_select("ARTICLE", "numThem", "numArt = $numArt")[0]['numThem'];

?>

<!--Bootstrap form to update an article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier un article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to update an article-->
            <form action="<?php echo ROOT_URL . '/api/articles/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="dtCreArt">Date de création</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt" value="<?php echo($dtCreArt) ?>">
                </div>
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" value="<?php echo($libTitrArt) ?>"required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="libChapoArt">Chapô</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <textarea id="libChapoArt" class="form-control" type="text" name="libChapoArt" required minlength="1"><?php echo($libChapoArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" value="<?php echo($libAccrochArt) ?>" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <textarea id="parag1Art" class="form-control" type="text" name="parag1Art" required minlength="1"><?php echo($parag1Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1">Sous-titre 1</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" value="<?php echo($libSsTitr1Art) ?>" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <textarea id="parag2Art" class="form-control" type="text" name="parag2Art" required minlength="1"><?php echo($parag2Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" value="<?php echo($libSsTitr2Art) ?>" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <textarea id="parag3Art" class="form-control" type="text" name="parag3Art" required minlength="1"><?php echo($parag3Art) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>">
                    <textarea id="libConclArt" class="form-control" type="text" name="libConclArt" required minlength="1"><?php echo($libConclArt) ?></textarea>
                </div>
                <div class="form-group">
                    <label for="numThem">Num thématique entre 1 et 4</label>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>"> 
                    <input id="numThem" class="form-control" type="number" name="numThem" value="<?php echo($numThem) ?>" required min="1" max="4" >
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
