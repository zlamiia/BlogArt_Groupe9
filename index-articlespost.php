<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
$idArt = $_GET["idArt"];
$articles = sql_select('article', 'numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem', "numArt = $idArt");

foreach($articles as $key => $article){   
?>

<!-- Article  -->
<div class="container-fluid articlepost">

        <div class="container title-content">
            
            <h1 class="title">
                <?php echo $article['libTitrArt']; ?>
            </h1>
    
        </div>
        <div class="container chapo-content">
            <h2>
                <?php echo $article['libChapoArt']; ?>
            </h2>
        </div>
        <div class="container img-content">
            <p>
                <?php echo $article['urlPhotArt']; ?>
            </p>
        </div>
        <div class="container accroche-content">
            <p>
                <?php echo $article['libAccrochArt']; ?>
            </p>
        </div>
        <div class="container paragraph-content">
            <p>
                <?php echo $article['parag1Art']; ?>
            </p>
        </div>
        <div class="container subtitle-content">
            <h3>
                <?php echo $article['libSsTitr1Art']; ?>
            </h3>
        </div>
        <div class="container paragraph-content">
            <p>
                <?php echo $article['parag2Art']; ?>
            </p>
        </div>
        <div class="container subtitle-content">
            <h3>
                <?php echo $article['libSsTitr2Art']; ?>
            </h3>
        </div>
        <div class="container paragraph-content">
            <p>
                <?php echo $article['parag3Art']; ?>
            </p>
        </div>
        <div class="container conclusion-content">
            <p>
                <?php echo $article['libConclArt']; }?>
            </p>
        </div>
</div>

    <!-- Commenter/Comentaires -->
    <div class="container comment-section">
        <form class="form-comment" id="form-comment" action="">
            <textarea class="form-comment-style" id="comment-box" name="comment-box" placeholder="Commenter..." rows="2" cols="50"></textarea>
            <input class="submit-comment" type="submit" form="form-comment" value=""/>
        </form>
        <div class="container comment-user">
            <div class="row user-photo-name">
                <div class="col-4 comment-user-photo">

                </div>
                <div class="col-7 comment-user-name">
                    <p>placeholder</p>
                </div>
            </div>
            <div class="comment-user-comment">
                <p>placeholder</p>
            </div>
        </div>
    </div>

    <!-- Autres Articles -->
    <?php
            $articles = sql_select('article', 'numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem');
            $idArt = 0;
                    
        ?>
        <div class="articles">
            <?php 
                foreach($articles as $key => $article){
            ?>
            <a href="index-articlespost.php?idArt=<?php echo $article['numArt']; ?>">
                <div class="articles-info">
                    <div class="articles-img_box-autres">

                    </div>
                    <div class="articles-text-autres">
                        <p>
                            <?php
                                echo $article['dtCreArt'];
                            ?>
                        </p>
                        <h4>
                            <?php
                                echo $article['libTitrArt'];
                            ?>
                        </h4>
                        <p>
                            <?php
                                echo $article['libChapoArt'];
                            ?>
                        </p>
                    </div>
                </div>
                <?php 
                    }
                ?>
            </a>
            
        </div>

    <!-- <div class="container text-center">
        <div class="row row-cols-3">
            <div class="col-3 articles-img_box-2 autres-articles autres-height"></div>
            <div class="col-3 articles-img_box-2 autres-articles autres-height" ></div>
            <div class="col-3 articles-img_box-2 autres-height"></div>
            <div class="col-3 articles-text-2 autres-articles autres-height"></div>
            <div class="col-3 articles-text-2 autres-articles autres-height" ></div>
            <div class="col-3 articles-text-2 autres-height"></div>
        </div>
    </div> -->

<?php require_once 'footer.php'; ?>