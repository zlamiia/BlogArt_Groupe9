<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numArt = $_POST['numArt'];
$newTitrArt = $_POST['libTitrArt'];
$newChapoArt = $_POST['libChapoArt'];
$newAccrochArt = $_POST['libAccrochArt'];

var_dump($newTitrArt);
var_dump($newChapoArt);
var_dump($newAccrochArt);

sql_update('ARTICLE',"libTitrArt = '$newTitrArt', libChapoArt = '$newChapoArt', libAccrochArt = '$newAccrochArt'","numArt = $numArt"); 


header('Location: ../../views/backend/articles/list.php');