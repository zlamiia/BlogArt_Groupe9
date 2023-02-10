<?php

require_once __DIR__ . '/../../config.php';

$numThem = sql_escape($_POST['numThem']);
$newLibThem = sql_escape($_POST['libThem']);


sql_update('THEMATIQUE',"libThem = '$newLibThem'","numThem = $numThem");


header('Location: ../../views/backend/thematiques/list.php');