<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new status-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouveau statut</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new status-->
            <form action="<?php echo ROOT_URL . '/api/status/create.php' ?>" method="post">
            <div class="form-group">
                    <label for="libStat">Libellé du statut</label>
                    <input id="libStat" class="form-control" type="text" name="libStat" required minlength="1" maxlength="25">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>