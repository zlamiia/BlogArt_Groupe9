<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numCom = sql_escape($_POST['numCom']);
$dtCreCom = sql_escape($_POST['dtCreCom']);
$libCom = sql_escape($_POST['libCom']);
$notifComKOAff = sql_escape($_POST['notifComKOAff']);
$numArt = sql_escape($_POST['numArt']);
$numMemb = sql_escape($_POST['numMemb']);

//Insertion dans la table comment
sql_insert('COMMENT',
'numCom, dtCreCom, libCom, attModOK, notifComKOAff, delLogiq, numArt, numMemb',
"'$numCom','$dtCreCom', '$libCom', 0, '$notifComKOAff', 0, '$numArt', '$numMemb'");


//Redirection
header('Location: ../../views/backend/comments/list.php');
