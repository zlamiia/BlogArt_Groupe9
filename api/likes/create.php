<?php

require_once __DIR__ . '/../../config.php';


$numMemb = sql_escape($_POST['numMemb']);
$numArt = sql_escape($_POST['numArt']);

sql_insert('LIKEART',
'numMemb, numArt, likeA',
"$numMemb, $numArt, 1");


header('Location: ../../views/backend/likes/list.php');