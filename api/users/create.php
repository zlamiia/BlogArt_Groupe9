<?php

require_once __DIR__ . '/../../config.php';


$prenomMemb = sql_escape($_POST['prenomMemb']);
$nomMemb = sql_escape($_POST['nomMemb']);
$pseudoMemb = sql_escape($_POST['pseudoMemb']);
$pass = password_hash($_POST["passMemb"], PASSWORD_BCRYPT);
$eMailMemb = sql_escape($_POST['eMailMemb']);
$numStat = sql_escape($_POST['numStat']);

sql_insert('MEMBRE', 'prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat',
"'$prenomMemb', '$nomMemb', '$pseudoMemb', '$pass', '$eMailMemb', $numStat");


header('Location: ../../views/backend/members/list.php');