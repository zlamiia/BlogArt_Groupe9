<?php

require_once __DIR__ . '/../../config.php';

$libMotCle = $_POST['libMotCle'];

sql_insert('MOTCLE', 'libMotCle', "'$libMotCle'");

header('Location: ../../views/backend/keywords/list.php');