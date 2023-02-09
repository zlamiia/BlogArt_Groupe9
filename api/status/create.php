<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libStat = sql_escape($_POST['libStat']);

if ($libStat != ""){
    sql_insert('STATUT', 'libStat', "'$libStat'");
}

// AFFICHAGE ERREUR SI JAMAIS CHAMPS VIDES A FAIRE

header('Location: ../../views/backend/status/list.php');