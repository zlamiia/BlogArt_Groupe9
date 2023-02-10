<?php

require_once __DIR__ . '/../../config.php';

$numCom = sql_escape($_POST['numCom']);

sql_delete('COMMENT',"numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');