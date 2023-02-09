<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<!-- Titre page  -->
<div class="container-fluid title-content">
        <img src="/src/images/Articles-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Articles -->
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
                    <div class="articles-img_box">

                    </div>
                    <div class="articles-text">
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
</div>

<?php require_once 'footer.php'; ?>