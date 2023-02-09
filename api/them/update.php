<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numThem = $_POST['numThem'];
$newLibThem = $_POST['libThem'];

sql_update('THEMATIQUE',"libThem = '$newLibThem'","numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');