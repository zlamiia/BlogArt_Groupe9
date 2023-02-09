<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numArt = $_POST['numArt'];
$newdtCreArt = $_POST['dtCreArt'];
$newlibTitrArt = $_POST['libTitrArt'];
$newlibChapoArt = $_POST['libChapoArt'];
$newlibAccrochArt = $_POST ['libAccrochArt'];
$newparag1Art = $_POST['parag1Art'];
$newlibSsTitr1Art = $_POST['libSsTitr1Art'];
$newparag2Art = $_POST['parag2Art'];
$newlibSsTitr2Art = $_POST['libSsTitr2Art'];
$newparag3Art = $_POST['parag3Art'];
$newlibConclArt = $_POST['libConclArt'];
// $newurlPhotArt = $_POST ['urlPhotArt']; Gérer le nom de l'URL
$newnumThem = $_POST ['numThem'];



sql_update('ARTICLE',"dtCreArt = '$newdtCreArt'","numArt = $numArt");
sql_update('ARTICLE',"libTitrArt = '$newTitrArt'","numArt = $numArt");
sql_update('ARTICLE',"libChapoArt = '$newlibChapoArt'","numArt = $numArt");
sql_update('ARTICLE',"libAccrochArt = '$newlibAccrochArt'","numArt = $numArt");
sql_update('ARTICLE',"parag1Art = '$newparag1Art'","numArt = $numArt");
sql_update('ARTICLE',"libSsTitr1Art = '$newlibSsTitr1Art'","numArt = $numArt");
sql_update('ARTICLE',"parag2Art = '$newparag2Art'","numArt = $numArt");
sql_update('ARTICLE',"libSsTitr2Art = '$newlibSsTitr2Art'","numArt = $numArt"); 
sql_update('ARTICLE',"parag3Art = '$newparag3Art'","numArt = $numArt");
sql_update('ARTICLE',"libConclArt = '$newlibConclArt'","numArt = $numArt");
sql_update('ARTICLE',"numThem = '$newnumThem'","numArt = $numArt");


header('Location: ../../views/backend/articles/list.php');