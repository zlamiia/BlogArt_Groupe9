<?php
include '../../../header.php';
?>

<!--Bootstrap form-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer une thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a them-->
            <form action="<?php echo ROOT_URL . '/api/users/create.php' ?>" method="post"> <!-- Revoir redirection -->
                <div class="form-group">
                    <label for="prenomMemb">Prenom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb">
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb">
                </div>
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                </div>
                <div class="form-group">
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb">
                </div>
                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb">
                </div>
                <!-- Demander à Gwendal comment gérer le num statut -->
                <div class="form-group">
                    <label for="numStat">Num statut</label>
                    <input id="numStat" class="form-control" type="text" name="numStat">
                </div>
                
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                </div>
            </form>
        </div>
    </div>
</div>