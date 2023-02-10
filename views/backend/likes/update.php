<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$articles = sql_select("ARTICLE", "*");
$membres = sql_select("MEMBRE", "*");
$numMemb = $_GET["numMemb"];


?>

<!--Bootstrap form to update a like-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Modifier un like</h1>
        </div>
        <div class="col-md-12">
            <!--Form to update a like-->
            <form action="<?php echo ROOT_URL . '/api/likes/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Num membre</label>
                    <input id="numMemb" class="form-control" type="number" name="numMemb" value="<?php echo($numMemb) ?>" readonly = "readonly">
                </div>
                <div class="form-group">
                    <label for="likeA">Like</label>
                    <input id="likeA" class="form-control" type="number" name="likeA" min=0 max=1>
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
