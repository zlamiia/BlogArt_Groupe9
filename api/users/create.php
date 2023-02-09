<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$numStat = sql_escape($_POST ['numStat']);



sql_insert('MEMBRE','prenomMemb, nomMemb, pseudoMemb, eMailMemb, passMemb', 'numStat',
"'$prenomMemb', '$nomMemb', '$pseudoMemb', '$eMailMemb','$passMemb', $numStat");


header('Location: ../../views/backend/likes/list.php');