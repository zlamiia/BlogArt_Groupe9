<?php
include '../../../header.php';

//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */
$numMemb = $_GET["numMemb"];
$prenomMemb = sql_select("MEMBRE", "prenomMemb", "numMemb = $numMemb")[0]['prenomMemb'];
$nomMemb = sql_select("MEMBRE", "nomMemb", "numMemb = $numMemb")[0]['nomMemb'];
$pseudoMemb = sql_select("MEMBRE", "pseudoMemb", "numMemb = $numMemb")[0]['pseudoMemb'];
$passMemb = sql_select("MEMBRE", "passMemb", "numMemb = $numMemb")[0]['passMemb'];
$eMailMemb = sql_select("MEMBRE", "eMailMemb", "numMemb = $numMemb")[0]['eMailMemb'];
$dtCreaMemb = sql_select("MEMBRE", "dtCreaMemb", "numMemb = $numMemb")[0]['dtCreaMemb'];
$numStat = sql_select("MEMBRE", "numStat", "numMemb = $numMemb")[0]['numStat'];
?>

<!--Bootstrap form to update a member-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Update member</h1>
        </div>
        <div class="col-md-12">
            <!--Form to update a member-->
            <form action="<?php echo ROOT_URL . '/api/users/update.php' ?>" method="post">
                <div class="form-group">
                    <label for="prenomMemb">Prenom membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="prenomMemb" class="form-control" type="text" name="prenomMemb" value="<?php echo($prenomMemb) ?>" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="nomMemb">Nom membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="nomMemb" class="form-control" type="text" name="nomMemb" value="<?php echo($nomMemb) ?>" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="pseudoMemb">Pseudo membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="pseudoMemb" class="form-control" type="text" name="pseudoMemb" value="<?php echo($pseudoMemb) ?>" required minlength="1" maxlength="70">
                </div>
                <div class="form-group">
                    <label for="passMemb">Mot de passe membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="passMemb" class="form-control" type="password" name="passMemb" value="<?php echo($passMemb) ?>" minlength="1" maxlength="70" required>
                </div>
                <div class="form-group">
                    <label for="eMailMemb">E-mail membre</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="eMailMemb" class="form-control" type="email" name="eMailMemb" value="<?php echo($eMailMemb) ?>">
                </div>
                <div class="form-group">
                    <label for="numStat">Num stat</label>
                    <input id="numMemb" class="form-control" style="display: none" type="text" name="numMemb" value="<?php echo($numMemb) ?>">
                    <input id="numStat" class="form-control" type="text" name="numStat" value="<?php echo($numStat) ?>">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</div>
