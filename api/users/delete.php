<?php

require_once __DIR__ . '/../../config.php';

$numMemb = sql_escape($_POST["numMemb"]);

sql_delete('LIKEART',"numMemb = $numMemb");
sql_delete('COMMENT',"numMemb = $numMemb");
sql_delete('MEMBRE',"numMemb = $numMemb");

header('Location: ../../views/backend/members/list.php');