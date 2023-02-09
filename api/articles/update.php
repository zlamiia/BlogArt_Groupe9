<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numArt = sql_escape($_POST['numArt']);
$newdtCreArt = sql_escape($_POST['dtCreArt']);
$newlibTitrArt = sql_escape($_POST['libTitrArt']);
$newlibChapoArt = sql_escape($_POST['libChapoArt']);
$newlibAccrochArt = sql_escape($_POST ['libAccrochArt']);
$newparag1Art = sql_escape($_POST['parag1Art']);
$newlibSsTitr1Art = sql_escape($_POST['libSsTitr1Art']);
$newparag2Art = sql_escape($_POST['parag2Art']);
$newlibSsTitr2Art =sql_escape($_POST['libSsTitr2Art']);
$newparag3Art = sql_escape($_POST['parag3Art']);
$newlibConclArt = sql_escape($_POST['libConclArt']);
// $newurlPhotArt = sql_escape($_POST ['urlPhotArt']); Gérer le nom de l'URL
$newnumThem =sql_escape($_POST ['numThem']);



if ($newdtCreArt != "" && $newlibTitrArt != "" && $newlibChapoArt != "" && $newlibAccrochArt != "" && $newparag1Art != "" && $newlibSsTitr1Art != "" && $newparag3Art != "" && $newlibConclArt != "" && $newnumThem != "") {
    sql_update('ARTICLE',"dtCreArt = '$newdtCreArt'","numArt = $numArt");
    sql_update('ARTICLE',"libTitrArt = '$newlibTitrArt'","numArt = $numArt");
    sql_update('ARTICLE',"libChapoArt = '$newlibChapoArt'","numArt = $numArt");
    sql_update('ARTICLE',"libAccrochArt = '$newlibAccrochArt'","numArt = $numArt");
    sql_update('ARTICLE',"parag1Art = '$newparag1Art'","numArt = $numArt");
    sql_update('ARTICLE',"libSsTitr1Art = '$newlibSsTitr1Art'","numArt = $numArt");
    sql_update('ARTICLE',"parag2Art = '$newparag2Art'","numArt = $numArt");
    sql_update('ARTICLE',"libSsTitr2Art = '$newlibSsTitr2Art'","numArt = $numArt"); 
    sql_update('ARTICLE',"parag3Art = '$newparag3Art'","numArt = $numArt");
    sql_update('ARTICLE',"libConclArt = '$newlibConclArt'","numArt = $numArt");
    sql_update('ARTICLE',"numThem = '$newnumThem'","numArt = $numArt");
}


header('Location: ../../views/backend/articles/list.php');