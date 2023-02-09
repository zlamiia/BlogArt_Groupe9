<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all members
$membres = sql_select("MEMBRE", "*");
?>

<!-- Bootstrap default layout to display all members in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Members</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro memb</th>
                        <th>Prenom memb</th>
                        <th>Nom memb</th>
                        <th>Pseudo memb</th>
                        <th>Password</th>
                        <th>E-mail</th>
                        <th>Date créa memb</th>
                        <th>numStat</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($membres as $membre) { ?>
                        <tr>
                            <td><?php echo $membre['numMemb']; ?></td>
                            <td><?php echo $membre['prenomMemb']; ?></td>
                            <td><?php echo $membre['nomMemb']; ?></td>
                            <td><?php echo $membre['pseudoMemb']; ?></td>
                            <td><?php echo $membre['passMemb']; ?></td>
                            <td><?php echo $membre['eMailMemb']; ?></td>
                            <td><?php echo $membre['dtCreaMemb']; ?></td>
                            <td><?php echo $membre['numStat']; ?></td>
                            <td>
                                <a href="update.php?numMemb=<?php echo $membre['numMemb']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $membre['numMemb']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Create</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer