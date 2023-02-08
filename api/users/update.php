<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = $_POST['numMemb'];
$newprenomMemb = $_POST['prenomMemb'];
$newnomMemb = $_POST['nomMemb'];
$newpseudoMemb = $_POST['pseudoMemb'];
$newpassMemb = $_POST['passMemb'];
$neweMailMemb = $_POST['eMailMemb'];
$newdtCreaMemb = $_POST['dtCreaMemb'];
$newnumStat = $_POST['numStat'];

sql_update('MEMBRE',"prenomMemb = '$newprenomMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"nomMemb = '$newnomMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"pseudoMemb = '$newpseudoMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"passMemb = '$newpassMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"eMailMemb = '$neweMailMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"dtCreaMemb = '$newdtCreaMemb'","numMemb = $numMemb");
sql_update('MEMBRE',"numStat = '$newnumStat'","numMemb = $numMemb");


header('Location: ../../views/backend/members/list.php');