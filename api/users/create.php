<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$prenomMemb = $_POST['prenomMemb'];
$nomMemb = $_POST['nomMemb'];
$pseudoMemb = $_POST['pseudoMemb'];
$eMailMemb = $_POST['eMailMemb'];
$passMemb = $_POST['passMemb'];
$numStat = $_POST ['numStat'];

sql_insert('MEMBRE','prenomMemb, nomMemb, pseudoMemb, eMailMemb, passMemb, numStat',
"'$prenomMemb', '$nomMemb', '$pseudoMemb', '$eMailMemb','$passMemb', '$numStat'");


//Redirection
header('Location: ../../views/backend/members/list.php');

