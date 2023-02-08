<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$dtCreArt = $_POST['dtCreArt'];
$libTitrArt = $_POST['libTitrArt'];
$libChapoArt = $_POST['libChapoArt'];
$libAccrochArt = $_POST ['libAccrochArt'];
$parag1Art = $_POST['parag1Art'];
$libSsTitr1Art = $_POST['libSsTitr1Art'];
$parag2Art = $_POST['parag2Art'];
$libSsTitr2Art = $_POST['libSsTitr2Art'];
$parag3Art = $_POST['parag3Art'];
$libConclArt = $_POST['libConclArt'];
// $urlPhotArt = $_POST ['urlPhotArt']; Gérer le nom de l'URL
$numThem = $_POST ['numThem'];


//Insertion dans la table article
sql_insert('ARTICLE',
'dtCreArt, libTitrArt, libChapoArt, libAccrochArt, parag1Art, libSsTitr1Art, parag2Art, libSsTitr2Art, parag3Art, libConclArt, urlPhotArt, numThem',
"'$dtCreArt','$libTitrArt', '$libChapoArt', '$libAccrochArt', '$parag1Art', '$libSsTitr1Art', '$parag2Art', '$libSsTitr2Art', '$parag3Art', '$libConclArt', '$urlPhotArt', $numThem");


//Redirection
header('Location: ../../views/backend/articles/list.php');
