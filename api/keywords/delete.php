<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$numMotCle = sql_escape($_POST['numMotCle']);

sql_delete('MOTCLEARTICLE',"numMotCle = $numMotCle");
sql_delete('MOTCLE',"numMotCle = $numMotCle");

header('Location: ../../views/backend/keywords/list.php');