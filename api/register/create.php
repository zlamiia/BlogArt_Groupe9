<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$passMemb = sql_escape($_POST['passMemb']);
$eMailMemb = sql_escape($_POST['eMailMemb']);

sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat',
"'$prenomMemb', '$nomMemb', '$pseudoMemb', '$passMemb', '$eMailMemb', 3");


//Rediriger vers page mon compte
header('Location: ../../views/backend/members/list.php');