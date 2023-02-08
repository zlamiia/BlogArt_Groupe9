<?php
include '../../../header.php';

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
                    <input id="numCom" class="form-control" type="text" name="numCom" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="dtCreCom">Date création commentaire</label>
                    <input id="dtCreCom" class="form-control" type="text" name="dtCreCom">
                </div>
                <div class="form-group">
                    <label for="libCom">Libellé commentaire</label>
                    <input id="libCom" class="form-control" type="text" name="libCom">
                </div>
                <!-- JE NE COMPRENDS PAS
                <div class="form-group">
                    <label for="attModOK">attModOK</label>
                    <input id="attModOK" class="form-control" type="text" name="attModOK">
                </div>
                -->
                <div class="form-group">
                    <label for="dtModCom">Date modification commentaire</label>
                    <input id="dtModCom" class="form-control" type="text" name="dtModCom">
                </div>
                <!-- JE NE COMPRENDS PAS
                <div class="form-group">
                    <label for="notifComKOAff">Notif commentaire KO Aff</label>
                    <input id="notifComKOAff" class="form-control" type="text" name="notifComKOAff">
                </div>
            
                <div class="form-group">
                    <label for="delLogiq">delLogiq</label>
                    <input id="delLogiq" class="form-control" type="text" name="delLogiq">
                </div>
                -->
                <div class="form-group">
                    <label for="numArt">Numéro article</label>
                    <input id="numArt" class="form-control" type="text" name="numArt">
                </div>
                <div class="form-group">
                    <label for="numMemb">Numéro membre</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>