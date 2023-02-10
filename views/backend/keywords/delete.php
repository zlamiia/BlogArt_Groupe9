<?php
include '../../../header.php';
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
$numMotCle = $_GET["numMotCle"];
$libMotCle = sql_select("MOTCLE", "libMotCle", "numMotCle = $numMotCle")[0]['libMotCle'];

?>

<!--Bootstrap form to delete a keyword-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Supprimer mot clé</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a keyword-->
            <form action="<?php echo ROOT_URL . '/api/keywords/delete.php' ?>" method="post">
            <div class="form-group">
                    <label for="numMotCle">Numéro mot clé</label>
                    <input id="numMotCle" class="form-control" type="number" name="numMotCle" value="<?php echo($numMotCle) ?>" readonly="readonly">
                </div>    
            <div class="form-group">
                    <label for="libMotCle">Libellé mot clé</label>
                    <input id="numMotCle" class="form-control" style="display: none" type="text" name="numMotCle" readonly="readonly">
                    <input id="libMotCle" class="form-control" type="text" name="libMotCle" value="<?php echo($libMotCle) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirmer la suppression ?</button>
                </div>
            </form>
        </div>
    </div>
</div>

