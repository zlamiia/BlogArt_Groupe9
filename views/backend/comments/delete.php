<?php
include '../../../header.php';

$numCom = $_GET ["numCom"];
$dtCreCom = sql_select("COMMENT", "dtCreCom", "numCom = $numCom")[0]['dtCreCom'];
$libCom = sql_select("COMMENT", "libCom", "numCom = $numCom")[0]['libCom'];
//$attModOK = sql_select("COMMENT", "attModOK", "numCom = $numCom")[0]['attModOK'];
$dtModCom = sql_select("COMMENT", "dtModCom", "numCom = $numCom")[0]['dtModCom'];
//$notifComKOAff = sql_select("COMMENT", "notifComKOAff", "numCom = $numCom")[0]['notifComKOAff'];
//$delLogiq = sql_select("COMMENT", "delLogiq", "numCom = $numCom")[0]['delLogiq'];
$numArt = sql_select("COMMENT", "numArt", "numCom = $numCom")[0]['numArt'];
$numMemb = sql_select("COMMENT", "numMemb", "numCom = $numCom")[0]['numMemb'];
?>

<!--Bootstrap form to delete a comment -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer un commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a comment -->
            <form action="<?php echo ROOT_URL . '/api/comments/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numCom">Numéro du commentaire</label>
                    <input id="numCom" class="form-control" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="dtCreCom">Date de création du commentaire</label>
                    <input id="dtCreCom" class="form-control" type="text" name="dtCreCom" value="<?php echo($dtCreCom) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libCom">Libellé commenaire</label>
                    <input id="libCom" class="form-control" type="text" name="libCom" value="<?php echo($libCom) ?>" readonly="readonly">
                </div>
                <!-- 
                <div class="form-group">
                    <label for="attModOK">attModOK</label>
                    <input id="attModOK" class="form-control" type="text" name="attModOK" value="<?php echo($attModOK) ?>" readonly="readonly">
                </div>
                -->
                <div class="form-group">
                    <label for="dtModCom">dtModCom</label>
                    <input id="dtModCom" class="form-control" type="text" name="dtModCom" value="<?php echo($dtModCom) ?>" readonly="readonly">
                </div>
                <!--
                <div class="form-group">
                    <label for="notifComKOAff">notifComKOAff 1</label>
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff" value="<?php echo($notifComKOAff) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="delLogiq">delLogiq</label>
                    <input id="delLogiq" class="form-control" type="text" name="delLogiq" value="<?php echo($delLogiq) ?>" readonly="readonly">
                </div>
                -->
                <div class="form-group">
                    <label for="numArt">Numéro article</label>
                    <input id="numArt" class="form-control" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="numMemb">Numéro membre</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                    <input id="numCom" class="form-control" style="display: none" type="text" name="numCom" value="<?php echo($numCom) ?>" readonly="readonly">
                </div>
            </form>
        </div>
    </div>
</div>

