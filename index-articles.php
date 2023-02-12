<?php require_once 'header.php'; 
sql_connect();

// print_r(curl("https://reqres.in/api/users", "POST", '{"name": "morpheus", "job": "leader"}'));
?>

<!-- Titre page  -->
<div class="container-fluid title-content">
        <img src="<?php echo ROOT_URL . '/src/images/Articles-title.svg'?>" alt="Articles">
        <h1 class="subtitle">Retrouvez l’univers et les dernières nouveautés de l’art digital</h1>
        <!-- Articles -->
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
            <!-- Permet de recuperer l'id de chaque article et afficher le bon artcile sur la page index-articlespost.php -->
            <a href="<?php echo ROOT_URL . '/index-articlespost.php?idArt='?><?php echo $article['numArt']; ?>"> 
            <!-- Affichage des Articles -->
                <div class="articles-info">
                    <div class="articles-img_box">
                        <img class="articles-img_box img-shadow" src="<?php echo ROOT_URL ?><?php echo $article['urlPhotArt']?>" alt="<?php echo $article['urlPhotArt']?>">
                    </div>
                    <div class="articles-text">
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

<?php require_once 'footer.php'; ?>