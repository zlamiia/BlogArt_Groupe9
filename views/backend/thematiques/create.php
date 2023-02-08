<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a thematic-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer une thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a thematic -->
            <form action="<?php echo ROOT_URL . '/api/them/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numThem">Numéro thématique</label>
                    <input id="numThem" class="form-control" type="text" name="numThem" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="libThem">Libellé de la thématique</label>
                    <input id="libThem" class="form-control" type="text" name="libThem">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer un compte</button>
                </div>
            </form>
        </div>
    </div>
</div>