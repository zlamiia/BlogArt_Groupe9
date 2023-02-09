<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

$numThem = $_GET["numThem"];
$libThem = sql_select("THEMATIQUE", "libThem", "numThem = $numThem")[0]['libThem'];


?>

<!--Bootstrap form to update a thematic-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier thématique</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a thematic-->
            <form action="<?php echo ROOT_URL . '/api/them/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="libThem">Libellé thématique</label>
                    <input id="numThem" class="form-control" style="display: none" type="text" name="numThem" value="<?php echo($numThem) ?>">
                    <input id="libThem" class="form-control" type="text" name="libThem" value="<?php echo($libThem) ?>" required minlength="1" maxlength="60">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
