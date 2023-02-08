<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numStat = $_POST['numStat'];
$newLibStat = $_POST['libStat'];

sql_update('STATUT',"libStat = '$newLibStat'","numStat = $numStat"); 

header('Location: ../../views/backend/status/list.php');