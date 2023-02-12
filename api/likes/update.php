<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST['numMemb']);
$newlikeA = sql_escape($_POST['likeA']);

sql_update('LIKEART',"likeA = '$newlikeA'","numMemb = $numMemb"); 

header('Location: ../../views/backend/likes/list.php');