<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
$numMemb = $_GET["numMemb"];


?>

<!--Bootstrap form to delete a like -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer like</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a like-->
            <form action="<?php echo ROOT_URL . '/api/likes/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Num membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>