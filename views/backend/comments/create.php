<?php
include '../../../header.php';


$articles = sql_select("ARTICLE", "*");
$membres = sql_select("MEMBRE", "*");

?>

<!--Bootstrap form to create a new comment-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un commentaire</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new comment-->
            <form action="<?php echo ROOT_URL . '/api/comments/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numCom">Numéro commentaire</label>
                    <input id="numCom" class="form-control" type="number" name="numCom" readonly="readonly">
                </div>
                <!-- date automatique -->
                <div class="form-group">
                    <label for="dtCreCom">Date création commentaire</label>
                    <input id="dtCreCom" class="form-control" type="date" name="dtCreCom" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libCom">Libellé commentaire</label>
                    <input id="libCom" class="form-control" type="text" name="libCom">
                </div>
                <div class="form-group">
                    <label for="attModOK">attModOK</label>
                    <input id="attModOK" class="form-control" type="text" name="attModOK" readonly = "readonly">
                </div>
                <div class="form-group">
                    <label for="notifComKOAff">Notif commentaire KO Aff</label>
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff">
                </div>
                <div class="form-group">
                    <label for="delLogiq">delLogiq</label>
                    <input id="delLogiq" class="form-control" type="text" name="delLogiq" readonly = "readonly">
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
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>