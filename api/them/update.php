<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numThem = sql_escape($_POST['numThem']);
$newLibThem = sql_escape($_POST['libThem']);

if ($newLibThem != ""){
    sql_update('THEMATIQUE',"libThem = '$newLibThem'","numThem = $numThem");
}

header('Location: ../../views/backend/thematiques/list.php');