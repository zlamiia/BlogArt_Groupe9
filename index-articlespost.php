<?php require_once 'header.php'; 
sql_connect();
// Recupere l'id de l'article dont le utilisateur à choisi
$idArt = $_GET["idArt"];
// Select toutes les infos sur l'article avec l'id recuperé
$articles = sql_select('article', 'numArt, dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem', "numArt = $idArt");
$thems = sql_select('thematique', 'numThem, libThem');
$idThem = 0;

$commentaires = sql_select('comment', 'dtCreCom, libCom, numMemb', "numArt = $idArt");

$idMemb = 0;

foreach($articles as $key => $article){   
?>

<!-- Article  -->
<div class="container-fluid articlepost">

        <div class="container title-content">
            <p>
                <?php echo $article['dtCreArt'] ?>
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
            <h1>
                <?php echo $article['libTitrArt']; ?>
            </h1>
        </div>
        <div class="container chapo-content">
            <h2>
                <?php echo $article['libChapoArt']; ?>
            </h2>
        </div>
        <div class="container img-content text-center">
            <img class="img-box img-shadow" src="<?php echo ROOT_URL ?><?php echo $article['urlPhotArt']?>" alt="<?php echo $article['urlPhotArt']?>">
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
        <?php
            foreach($commentaires as $key => $commentaire){
                $idMemb = $commentaire['numMemb'];
                $pseudoMembCom = sql_select('membre', 'pseudoMemb', "numMemb = $idMemb");
        ?>
        <div class="container comment-user">
            <div class="row user-photo-name">
                <div class="col-4 comment-user-photo">
                    
                </div>
                <div class="col-7 comment-user-name">
                    <p>
                        <?php
                            echo $pseudoMembCom[0]['pseudoMemb'];
                        ?>
                    </p>
                </div>
            </div>
            <div class="comment-user-comment">
                <p>
                    <?php
                        echo $commentaire['libCom'];
                    ?>
                </p>
            </div>
        </div>
        <?php
            }
        ?>
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
            <a href="<?php echo ROOT_URL . '/index-articlespost.php?idArt='?><?php echo $article['numArt']; ?>">
                <div class="articles-info">
                    <div class="articles-img_box-autres">
                        <img class="articles-img_box-autres img-shadow" src="<?php echo ROOT_URL ?><?php echo $article['urlPhotArt']?>" alt="<?php echo $article['urlPhotArt']?>">
                    </div>
                    <div class="articles-text-autres">
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