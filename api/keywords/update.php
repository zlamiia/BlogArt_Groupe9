<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMotCle = sql_escape($_POST['numMotCle']);
$newlibMotCle = sql_escape($_POST['libMotCle']);

sql_update('MOTCLE',"libMotCle = '$newlibMotCle'","numMotCle = $numMotCle"); 

header('Location: ../../views/backend/keywords/list.php');