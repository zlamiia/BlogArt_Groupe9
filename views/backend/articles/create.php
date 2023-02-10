<?php
include '../../../header.php';

$thematiques = sql_select("THEMATIQUE", "*");
?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Créer un nouvel article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="dtCreArt">Date et Heure dépôt article</label>
                    <input id="dtCreArt" class="form-control" type="datetime-local" name="dtCreArt">
                </div>

                <div class="form-group">
                    <label for="libTitrArt">Titre de l'article</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt" required minlength="1" maxlength="100">
                </div>
                
                <div class="form-group">
                    <label for="libChapoArt">Chapô</label>
                    <textarea id="libChapoArt" class="form-control" type="text" name="libChapoArt" required minlength="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="parag1Art" class="form-control" type="text" name="parag1Art" required minlength="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <textarea id="parag2Art" class="form-control" type="text" name="parag2Art" required minlength="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art" required minlength="1" maxlength="100">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <textarea id="parag3Art" class="form-control" type="text" name="parag3Art" required minlength="1"></textarea>
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <textarea id="libConclArt" class="form-control" type="text" name="libConclArt" required minlength="1"></textarea>
                </div>
                <!-- Mieux gérer
                <div class="form-group">
                    <label for="urlPhotArt">URL de la photo</label>
                    <input id="urlPhotArt" class="form-control" type="text" name="urlPhotArt">
                </div>
                -->

                <div class="form-group">
                <label for="numThem">Thématique</label>
                <select class="form-select" name="numThem">
                    <?php foreach ($thematiques as $thematique) { ?>
                        <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option>
                    <?php } ?>
                </select>
                </div>

                <div class="form-group mt-2">
                <button type="submit" class="btn btn-primary">Créer</button>
            </div>
            </form>

            <!-- A mettre dans update et delete 
            <form action="" method="post" enctype='multipart/form-data'>
            <input type="file" name="file" id="file">
            <input type="submit" value="Télécharger">
            </form>
            -->
        </div>
    </div>
</div>
