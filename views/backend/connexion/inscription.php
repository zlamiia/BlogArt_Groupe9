<?php
include '../../../header.php';

?>


<!--Bootstrap form -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Inscription</h1>
        </div>
        <div class="col-md-12">
            <!--Form -->
            <form action="<?php echo ROOT_URL . '/api/register/inscription.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
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
                    <label for="passMemb">Mot de passe</label>
                    <input id="passMemb" class="form-control" type="password" name="passMemb">
                </div>

                <div class="form-group">
                    <label for="eMailMemb">E-mail</label>
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb">
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                </div>

            </form>
        </div>
    </div>
</div>