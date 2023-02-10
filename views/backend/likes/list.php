<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$likes = sql_select("LIKEART INNER JOIN ARTICLE ON LIKEART.numArt = ARTICLE.numArt", "*");


?>

<!-- Bootstrap default layout to display all likes in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Likes</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Num membre</th>
                        <th>Num article</th>
                        <th>Titre article</th>
                        <th>Like</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($likes as $like) { ?>
                        <tr>
                            <td><?php echo $like['numMemb']; ?></td>
                            <td><?php echo $like['numArt']; ?></td>
                            <td><?php echo $like['libTitrArt']; ?></td>
                            <td><?php echo $like['likeA']; ?></td>
                            <td>
                                <a href="update.php?numMemb=<?php echo $like['numMemb']; ?>&numArt=<?php echo $like['numArt']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numMemb=<?php echo $like['numMemb']; ?>&numArt=<?php echo $like['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>
</div>

<?php
include '../../../footer.php'; // contains the footer