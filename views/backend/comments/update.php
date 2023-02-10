<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$articles = sql_select("ARTICLE", "*");
$membres = sql_select("MEMBRE", "*");


$numCom = $_GET ["numCom"];
$dtCreCom = sql_select("COMMENT", "dtCreCom", "numCom = $numCom")[0]['dtCreCom'];
$libCom = sql_select("COMMENT", "libCom", "numCom = $numCom")[0]['libCom'];
$attModOK = sql_select("COMMENT", "attModOK", "numCom = $numCom")[0]['attModOK'];
$dtModCom = sql_select("COMMENT", "dtModCom", "numCom = $numCom")[0]['dtModCom'];
$notifComKOAff = sql_select("COMMENT", "notifComKOAff", "numCom = $numCom")[0]['notifComKOAff'];
$delLogiq = sql_select("COMMENT", "delLogiq", "numCom = $numCom")[0]['delLogiq'];
$numArt = sql_select("COMMENT", "numArt", "numCom = $numCom")[0]['numArt'];
$numMemb = sql_select("COMMENT", "numMemb", "numCom = $numCom")[0]['numMemb'];

?>

<!--Bootstrap form to update a comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to update a comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numCom">Num commentaire</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly="readonly">
                    <input id="numCom" class="form-control" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="dtCreCom">Date de création</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>">
                    <input id="dtCreCom" class="form-control" type="text" name="dtCreCom" value="<?php echo($dtCreCom) ?>">
                </div>
                <div class="form-group">
                    <label for="libCom">Libellé</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>">
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom) ?>">
                </div>
                <div class="form-group">
                    <label for="attModOK">attModOK</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly = "readonly">
                    <input id="attModOK" class="form-control" type="text" name="attModOK" value="<?php echo($attModOK) ?>" readonly = "readonly">
                </div>
                <div class="form-group">
                    <label for="dtModCom">Date modification</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>">
                    <input id="dtModCom" class="form-control" type="datetime-local" name="dtModCom" value="<?php echo($dtModCom) ?>">
                </div>
                <div class="form-group">
                    <label for="notifComKOAff">notifComKOAff</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>">
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff" value="<?php echo($notifComKOAff) ?>">
                </div>
                <div class="form-group">
                    <label for="delLogiq">delLogiq</label>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly = "readonly">
                    <input id="delLogiq" class="form-control" type="text" name="delLogiq" value="<?php echo($delLogiq) ?>" readonly = "readonly">
                </div>
                <div class="form-group">
                <label for="numArt">Article</label>
                <select class="form-select" name="numArt">
                    <?php foreach ($articles as $article) { ?>
                        <option value="<?php echo $article['numArt']; ?>"><?php echo $article['libTitrArt']; ?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="form-group">
                <label for="numMemb">Membre</label>
                <select class="form-select" name="numMemb">
                    <?php foreach ($membres as $membre) { ?>
                        <option value="<?php echo $membre['numMemb']; ?>"><?php echo $membre['pseudoMemb']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
