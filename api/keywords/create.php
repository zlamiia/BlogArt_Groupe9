<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$libMotCle = $_POST['libMotCle'];

sql_insert('MOTCLE', 'libMotCle', "'$libMotCle'");

header('Location: ../../views/backend/keywords/list.php');