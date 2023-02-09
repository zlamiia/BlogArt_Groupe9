<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = sql_escape($_POST['numMemb']);
$newprenomMemb = sql_escape($_POST['prenomMemb']);
$newnomMemb = sql_escape($_POST['nomMemb']);
$newpseudoMemb = sql_escape($_POST['pseudoMemb']);
$newpassMemb = sql_escape($_POST['passMemb']);
$neweMailMemb = sql_escape($_POST['eMailMemb']);
$newdtCreaMemb = sql_escape($_POST['dtCreaMemb']);
$newnumStat = sql_escape($_POST['numStat']);

sql_update('MEMBRE',"prenomMemb = '$newprenomMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"nomMemb = '$newnomMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"pseudoMemb = '$newpseudoMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"passMemb = '$newpassMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"eMailMemb = '$neweMailMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"dtCreaMemb = '$newdtCreaMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"numStat = '$newnumStat'","numMemb = $numMemb");


header('Location: ../../views/backend/members/list.php');