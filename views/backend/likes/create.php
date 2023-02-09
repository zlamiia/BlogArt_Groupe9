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

?>

<!--Bootstrap form to create a like -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un like</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a like -->
            <form action="<?php echo ROOT_URL . '/api/likes/create.php' ?>" method="post">

                <div class="form-group">
                <label for="numMemb">Membre</label>
                <select class="form-select" name="numMemb">
                    <?php foreach ($membres as $membre) { ?>
                        <option value="<?php echo $membre['numMemb']; ?>"><?php echo $membre['pseudoMemb']; ?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="form-group">
                <label for="numArt">Article</label>
                <select class="form-select" name="numArt">
                    <?php foreach ($articles as $article) { ?>
                        <option value="<?php echo $article['numArt']; ?>"><?php echo $article['libTitrArt']; ?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>