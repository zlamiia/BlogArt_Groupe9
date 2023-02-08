<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a keyword-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create a keyword</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a keyword-->
            <form action="<?php echo ROOT_URL . '/api/keywords/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMotCle">Numéro mot clé</label>
                    <input id="numMotCle" class="form-control" type="text" name="numMotCle" readonly = "readonly">
                </div>
                <div class="form-group">
                    <label for="libMotCle">Libellé</label>
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>