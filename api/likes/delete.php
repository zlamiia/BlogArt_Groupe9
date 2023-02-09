<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMemb = sql_escape($_POST['numMemb']);

sql_delete('LIKEART',"numMemb = $numMemb");


header('Location: ../../views/backend/likes/list.php');