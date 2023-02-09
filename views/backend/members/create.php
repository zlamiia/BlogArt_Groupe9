<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un membre</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a member-->
            <form action="<?php echo ROOT_URL . '/api/users/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prenom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb">
                </div>
                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb" minlength="1" maxlength="70" required>
                </div>
                <!-- MVP : Faire une liste pour pouvoir choisir les numStat -->
                <div class="form-group">
                    <label for="numStat">Numéro statut</label>
                    <input id="numStat" class="form-control" type="number" name="numStat">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>
