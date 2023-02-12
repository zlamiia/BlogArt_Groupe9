<?php
include '../../../header.php';

?>

<!--Bootstrap form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Connexion</h1>
        </div>
        <div class="col-md-12">
            <!--Form -->
            <form action="<?php echo ROOT_URL . '/api/register/connexion.php' ?>" method="post">

                <div class="form-group">
                    <label for="pseudoMemb">Pseudo</label>
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb">
                </div>

                <div class="form-group">
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Se connecter</button>
                </div>

            </form>
        </div>
    </div>
</div>