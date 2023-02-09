<?php
include '../../../header.php'; // contains the header and call to config.php
//Security check
//Level 1 mean administator in DB
/* if (!check_access(1)) {
    header('Location: /'); //Redirect to home
    exit();
} */


$articles = sql_select("ARTICLE INNER JOIN THEMATIQUE ON ARTICLE.numThem = THEMATIQUE.numThem", "*");

?>

<!-- Bootstrap default layout to display all articles in foreach -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Articles</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Num article</th>
                        <th>Date de création</th>
                        <th>Titre</th>
                        <th>Chapô</th>
                        <th>Accroche</th>
                        <th>Paragraphe 1</th>
                        <th>Ss-titre 1</th>
                        <th>Paragraphe 2</th>
                        <th>Ss-titre 2</th>
                        <th>Paragraphe 3</th>
                        <th>Conclusion</th>
                        <!-- <th>urlPhoto</th> -->
                        <th>Libellé thématique</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($articles as $article) { ?>
                        <tr>
                            <td><?php echo $article['numArt']; ?></td>
                            <td><?php echo $article['dtCreArt']; ?></td>
                            <td><?php echo $article['libTitrArt']; ?></td>
                            <td><?php echo $article['libChapoArt']; ?></td>
                            <td><?php echo $article['libAccrochArt']; ?></td>
                            <td><?php echo $article['parag1Art']; ?></td>
                            <td><?php echo $article['libSsTitr1Art']; ?></td>
                            <td><?php echo $article['parag2Art']; ?></td>
                            <td><?php echo $article['libSsTitr2Art']; ?></td>
                            <td><?php echo $article['parag3Art']; ?></td>
                            <td><?php echo $article['libConclArt']; ?></td>
                            <!--balise php pour echo $article ['urlPhotArt'] -->
                            <td><?php echo $article['libThem']; ?></td>

                            <td>
                                <a href="update.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-primary">Modifier</a>
                                <a href="delete.php?numArt=<?php echo $article['numArt']; ?>" class="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <a href="create.php" class="btn btn-success">Créer</a>
        </div>
    </div>

<?php
include '../../../footer.php'; // contains the footer