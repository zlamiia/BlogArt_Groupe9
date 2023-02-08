<?php
include '../../../header.php';

$numMemb = $_GET ["numMemb"];
$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$dtCreaMemb = sql_select("MEMBRE", "dtCreaMemb", "numMemb = $numMemb")[0]['dtCreaMemb'];
$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];

?>

<!--Bootstrap form to delete a member -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Delete member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to delete a member -->
            <form action="<?php echo ROOT_URL . '/api/users/delete.php' ?>" method="post">
                <div class="form-group">
                    <label for="numMemb">Num membre</label>
                    <input id="numMemb" class="form-control" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="prenomMemb">Prénom</label>
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom</label>
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="passMemb">Password</label>
                    <input id="passMemb" class="form-control" type="text" name="passMemb" value="<?php echo($passMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="eMailMemb">Email</label>
                    <input id="eMailMemb" class="form-control" type="text" name="eMailMemb" value="<?php echo($eMailMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="dtCreaMemb">Date création membre</label>
                    <input id="dtCreaMemb" class="form-control" type="text" name="dtCreaMemb" value="<?php echo($dtCreaMemb) ?>" readonly="readonly">
                </div>
                <div class="form-group">
                    <label for="numStat">Num statut</label>
                    <input id="numStat" class="form-control" type="text" name="numStat" value="<?php echo($numStat) ?>" readonly="readonly">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-danger">Confirm deletion ?</button>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>" readonly="readonly">
                </div>
            </form>
        </div>
    </div>
</div>

