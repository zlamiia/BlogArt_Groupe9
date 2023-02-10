<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numCom = sql_escape($_POST['numCom']);

sql_delete('COMMENT',"numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');