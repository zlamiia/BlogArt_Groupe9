<?php

require_once __DIR__ . '/../../config.php';;

$numCom = $_POST['numCom'];
$dtCreCom = $_POST['dtCreCom'];
$libCom = $_POST['libCom'];
//$attModOK = $_POST ['attModOK'];
//$dtModCom = $_POST['dtModCom'];
//$notifComKOAff = $_POST['notifComKOAff'];
//$delLogiq = $_POST['delLogiq'];
$numArt = $_POST['numArt'];
$numMemb = $_POST['numMemb'];

//Insertion dans la table comment
sql_insert('COMMENT',
'numCom, dtCreCom, libCom, numArt, numMemb',
"'$numCom','$dtCreCom', '$libCom','$numArt', '$numMemb'");


//Redirection
header('Location: ../../views/backend/comments/list.php');
