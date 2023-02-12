<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>
<!-- Cover -->
<img class="container-fluid cover" src="/src/images/Cover.svg" alt="">
    <!-- Articles Homepage -->
    <div class="container-fluid title-content">
        <img class="title-img"src="/src/images/Articles-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Container Articles -->

        <?php
            $articles = sql_select('article', 'numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem');
            $thems = sql_select('thematique', 'numThem, libThem');
            $idArt = 0;
            $idThem = 0;
                    
        ?>
        <div class="articles">
            <?php 
                foreach($articles as $key => $article){
            ?>
            <a href="index-articlespost.php?idArt=<?php echo $article['numArt']; ?>">
                <div class="articles-info">
                    <div class="articles-img_box-home">
                        <img class="articles-img_box-home img-shadow" src="<?php echo $article['urlPhotArt']?>" alt="">
                    </div>
                    <div class="articles-text-home">
                        <p>
                            <?php
                                echo $article['dtCreArt'];
                            ?>
                        </p>
                        <p>
                            <?php
                                $idThem = $article['numThem'];
                                foreach($thems as $key => $them){
                                    if($idThem == $them['numThem']){
                                        echo $them['libThem'];
                                    }
                                }
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
        <!-- 1er article image et texte 
        <div class="row articles-home-1">
            <div class="col-8 articles-home-img_box-1">

            </div>
            <div class="col articles-home-text-1">
                <p>
                    <?php 
        
                    ?>
                </p>
            </div>
        </div>
        
        !-- 2eme et 3eme articles image  --
        <div class="row articles-2-3-img">
            <div class="col articles-img_box-2">

            </div>
            <div class="col-1 space-articles-2-3"></div> !-- Espacement entre les deux div --
            <div class="col articles-img_box-3">
                
            </div>
        </div>
        !-- 2eme et 3eme articles texte  --
        <div class="row articles-2-3-text">

            <div class="col articles-text-2">
                <p>
                    <?php 
                    
                    ?>
                </p>
            </div>
            <div class="col-1 space-articles-2-3"></div> !-- Espacement entre les deux div --
            <div class="col articles-text-3">
                <p>
                    <?php 
                    
                    ?>
                </p>      
            </div>
        </div> -->
    </div>
    <!-- Evenements Homepage  -->
    <div class="container-fluid home-content">
        <img src="/src/images/Evenements-title.svg" alt="">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Container Carte Evenements  -->
        <div class="container evenement-home-content">
            <img class="evenement" src="/src/images/evenements.svg" alt="">
        </div>      
    </div>
<?php require_once 'cookies.php'; ?>
<?php require_once 'footer.php'; ?>