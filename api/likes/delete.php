<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = sql_escape($_POST['numMemb']);
$numArt = sql_escape($_POST['numArt']);

sql_delete('LIKEART',"numMemb = $numMemb AND numArt = $numArt");

header('Location: ../../views/backend/likes/list.php');