<?php

require_once __DIR__ . '/../../config.php';

$libStat = sql_escape($_POST['libStat']);


sql_insert('STATUT', 'libStat', "'$libStat'");



// AFFICHAGE ERREUR SI JAMAIS CHAMPS VIDES A FAIRE

header('Location: ../../views/backend/status/list.php');