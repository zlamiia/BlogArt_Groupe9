<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMotCle = $_POST['numMotCle'];
$newlibMotCle = $_POST['libMotCle'];

sql_update('MOTCLE',"libMotCle = '$newlibMotCle'","numMotCle = $numMotCle"); 

header('Location: ../../views/backend/keywords/list.php');