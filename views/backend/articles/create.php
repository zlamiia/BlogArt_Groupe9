<?php
include '../../../header.php';

// $thematiques = sql_select("THEMATIQUE", "*");

$thematiques = sql_select("THEMATIQUE", "*");

?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img class="ecrire-title"src="/src/images/Ecrire-title.svg" alt="">
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form class="form-div" action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post" enctype='multipart/form-data'>
                <div class="ecrire-article">
                    <input class="form-style"id="dtCreArt" class="form-style" type="datetime-local" name="dtCreArt" placeholder="Date et Heure dépôt article">
                </div>

                <div class="ecrire-article">
                    <input id="libTitrArt" class="form-style" type="text" name="libTitrArt" required minlength="1" maxlength="100" placeholder="Titre">
                </div>
                
                <div class="ecrire-article">
                    <textarea id="libChapoArt" class="form-style" type="text" name="libChapoArt" required minlength="1"placeholder="Chapô"></textarea>
                </div>
                <div class="ecrire-article">
                    <input id="libAccrochArt" class="form-style" type="text" name="libAccrochArt" required minlength="1" maxlength="100" placeholder="Accroche">
                </div>
                <div class="ecrire-article">
                    <textarea id="parag1Art" class="form-style" type="text" name="parag1Art" required minlength="1" placeholder="Paragraphe 1"></textarea>
                </div>
                <div class="ecrire-article">
                    <input id="libSsTitr1Art" class="form-style" type="text" name="libSsTitr1Art" required minlength="1" maxlength="100" placeholder="Sous-titre 1">
                </div>
                <div class="ecrire-article">
                    <textarea id="parag2Art" class="form-style" type="text" name="parag2Art" required minlength="1" placeholder="Paragraphe 2"></textarea>
                </div>
                <div class="ecrire-article">
                    <input id="libSsTitr2Art" class="form-style" type="text" name="libSsTitr2Art" required minlength="1" maxlength="100" placeholder="Sous-titre 2">
                </div>
                <div class="ecrire-article">
                    <textarea id="parag3Art" class="form-style" type="text" name="parag3Art" required minlength="1" placeholder="Paragraphe 3"></textarea>
                </div>
                <div class="ecrire-article">
                    <textarea id="libConclArt" class="form-style" type="text" name="libConclArt" required minlength="1" placeholder="Conclusion"></textarea>
                </div>
                <!-- Mieux gérer
                <div class="form-style">
                    <label for="urlPhotArt">URL de la photo</label>
                    <input id="urlPhotArt" class="form-style" type="text" name="urlPhotArt">
                </div>
                -->
                <div class="ecrire-article">
                <select class="form-style" name="numThem">
                    <?php foreach ($thematiques as $thematique) { ?>
                        <option value="<?php echo $thematique['numThem']; ?>"><?php echo $thematique['libThem']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="ecrire-article">
                    <input id="file" class="form-style" type="file" name="file">
                </div>
                <div class="ecrire-article mt-2">
                    <button class="submit" type="submit" class="btn btn-primary">Créer</button>
                </div>
            </form>
        </div>
    </div>
</div>

