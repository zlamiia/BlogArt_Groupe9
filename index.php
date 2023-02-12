<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL & ~E_NOTICE);
require_once 'header.php'; 
sql_connect();

?>
<!-- Cover -->
<img class="container-fluid cover" src="<?php echo ROOT_URL . '/src/images/Cover.svg'?>" alt="Cover">
    <!-- Articles Homepage -->
    <div class="container-fluid title-content">
        <img class="title-img" src="<?php echo ROOT_URL . '/src/images/Articles-title.svg'?>" alt="Articles">
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
            <a href="<?php echo ROOT_URL . '/index-articlespost.php?idArt='?><?php echo $article['numArt']; ?>">
                <div class="articles-info">
                    <div class="articles-img_box-home">
                        <img class="articles-img_box-home img-shadow" src="<?php echo ROOT_URL ?><?php echo $article['urlPhotArt']?>" alt="<?php echo $article['urlPhotArt']?>">
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
    </div>
    <!-- Evenements Homepage  -->
    <div class="container-fluid home-content">
        <img src="<?php echo ROOT_URL . '/src/images/Evenements-title.svg'?>" alt="Evenements">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Container Carte Evenements  -->
        <div class="container evenement-home-content">
            <img class="evenement" src="<?php echo ROOT_URL . '/src/images/evenements.svg'?>" alt="Evenements-placeholder">
        </div>      
    </div>
<?php require_once 'cookies.php'; ?>
<?php require_once 'footer.php'; ?>