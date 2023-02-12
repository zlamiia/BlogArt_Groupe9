<?php require_once 'header.php'; 
sql_connect();

?>

<!-- Titre page  -->
<img class="ecrire-title" src="<?php echo ROOT_URL . '/src/images/Ecrire-title.svg'?>" alt="Ecrire">
    
    <!-- Form pour ecrire l'article  -->
    <div class="container ecrire-article">
        <div class="container form-div">
            <form id="form-article" action="">
                <input class="form-style" type="text" id="titre" name="titre" placeholder="Titre">
                <input class="form-style" type="text" id="chapo" name="chapo" placeholder="Chapô">
                <textarea class="form-style" id="paragraphe1" name="paragraphe1" placeholder="1er paragraphe" rows="4" cols="50"></textarea>
                <input class="form-style" type="text" id="sous-titre-p2" name="sous-titre" placeholder="Sous-Titre">
                <textarea class="form-style" id="paragraphe2" name="paragraphe2" placeholder="2er paragraphe" rows="4" cols="50"></textarea>
                <input class="form-style" type="text" id="sous-titre-p3" name="sous-titre" placeholder="Sous-Titre">
                <textarea class="form-style" id="paragraphe3" name="paragraphe3" placeholder="3er paragraphe" rows="4" cols="50"></textarea>
                <textarea class="form-style" id="conclusion" name="conclusion" placeholder="Conclusion" rows="4" cols="50"></textarea>
                <br>
                <input class="submit" type="submit" form="form-article" value="Envoyer"/>
            </form>
        </div>
    </div>

<?php require_once 'footer.php'; ?>