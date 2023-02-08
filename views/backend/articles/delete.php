<?php
include '../../../header.php';

$numArt = $_GET ["numArt"];

?>

<!--Bootstrap form to delete an article -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete Article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create an article -->
            <form action="<?php echo ROOT_URL . '/api/articles/delete.php' ?>" method="post">
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                    <input id="numArt" class="form-control" style="display: none" type="text" name="numArt" value="<?php echo($numArt) ?>" readonly="readonly">
                </div>
            </form>
        </div>
    </div>
</div>

