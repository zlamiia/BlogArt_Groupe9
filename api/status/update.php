<?php

require_once __DIR__ . '/../../config.php';

$numStat = sql_escape($_POST['numStat']);
$newLibStat = sql_escape($_POST['libStat']);


sql_update('STATUT',"libStat = '$newLibStat'","numStat = $numStat"); 


// AFFICHAGE ERREUR SI JAMAIS CHAMPS VIDES A FAIRE

header('Location: ../../views/backend/status/list.php');