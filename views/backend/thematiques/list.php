<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */

//Load all themes
$thematiques = sql_select("THEMATIQUE", "*");
?>

<!-- Bootstrap default layout to display all themes in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Thématiques</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Numéro</th>
                        <th>Libellé</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($thematiques as $thematique) { ?>
                        <tr>
                            <td><?php echo $thematique['numThem']; ?></td>
                            <td><?php echo $thematique['libThem']; ?></td>
                            <td>
                                <a href="update.php?numThem=<?php echo $thematique['numThem']; ?>" class="btn btn-primary">Edit</a>
                                <a href="delete.php?numThem=<?php echo $thematique['numThem']; ?>" class="btn btn-danger">Delete</a>
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