<?php

require_once __DIR__ . '/../../config.php';

$numThem = sql_escape($_POST['numThem']);

$cnt_article = sql_select('ARTICLE', 'COUNT(numThem) as cnt_article', "numThem = $numThem")[0]['cnt_article'];
if ($cnt_article != 0){
    header('Location: ../../views/backend/thematiques/delete.php?numThem='.$numThem."&error=true");
    exit;
}
sql_delete('THEMATIQUE',"numThem = $numThem");

header('Location: ../../views/backend/thematiques/list.php');