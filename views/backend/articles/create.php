<?php
include '../../../header.php';

?>

<!--Bootstrap form to create a new article-->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Create new Article</h1>
        </div>
        <div class="col-md-12">
            <!--Form to create a new article-->
            <form action="<?php echo ROOT_URL . '/api/articles/create.php' ?>" method="post">
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                </div>
                <div class="form-group-2">
                    <label for="libChapoArt">Chapô</label>
                    <input id="libChapoArt" class="form-control" type="text" name="libChapoArt">
                </div>
                <div class="form-group-3">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                </div>
                <div class="form-group-4">
                    <label for="parag1Art">Paragraphe 1</label>
                    <input id="parag1Art" class="form-control" type="text" name="parag1Art">
                </div>
                <div class="form-group-5">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                </div>
                <div class="form-group-6">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art">
                </div>
                <div class="form-group-7">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                </div>
                <div class="form-group-8">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art">
                </div>
                <div class="form-group-9">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">
                </div>
                <div class="form-group-10">
                    <label for="numThem">numThem</label>
                    <input id="numThem" class="form-control" type="text" name="numThem">
                </div>
                <div class="form-group mt-2">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>