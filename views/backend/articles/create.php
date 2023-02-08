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
                    <label for="dtCreArt">Date et Heure dépôt article <br> Sous la forme : AAAA-MM-JJ HH-MM-SS</label> 
                    <!-- Il faut mieux gérer la saisie de la date et de l'heure -->
                    <input id="dtCreArt" class="form-control" type="text" name="dtCreArt">
                </div>
                <div class="form-group">
                    <label for="libTitrArt">Titre</label>
                    <input id="libTitrArt" class="form-control" type="text" name="libTitrArt">
                </div>
                
                <!-- IL FAUT METTRE DES TEXT AREA-->
                
                <div class="form-group">
                    <label for="libChapoArt">Chapô</label>
                    <textarea id="libChapoArt" class="form-control" type="text" name="chapo"></textarea>
                </div>
                <div class="form-group">
                    <label for="libAccrochArt">Accroche</label>
                    <input id="libAccrochArt" class="form-control" type="text" name="libAccrochArt">
                </div>
                <div class="form-group">
                    <label for="parag1Art">Paragraphe 1</label>
                    <textarea id="parag1Art" class="form-control" type="text" name="parag1"></textarea>
                </div>
                <div class="form-group">
                    <label for="libSsTitr1Art">Sous-titre 1</label>
                    <input id="libSsTitr1Art" class="form-control" type="text" name="libSsTitr1Art">
                </div>
                <div class="form-group">
                    <label for="parag2Art">Paragraphe 2</label>
                    <input id="parag2Art" class="form-control" type="text" name="parag2Art">
                </div>
                <div class="form-group">
                    <label for="libSsTitr2Art">Sous-titre 2</label>
                    <input id="libSsTitr2Art" class="form-control" type="text" name="libSsTitr2Art">
                </div>
                <div class="form-group">
                    <label for="parag3Art">Paragraphe 3</label>
                    <input id="parag3Art" class="form-control" type="text" name="parag3Art">
                </div>
                <div class="form-group">
                    <label for="libConclArt">Conclusion</label>
                    <input id="libConclArt" class="form-control" type="text" name="libConclArt">
                </div>
                <div class="form-group">
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