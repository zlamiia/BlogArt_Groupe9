<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL & ~E_NOTICE);
    require_once 'header.php'; 
    sql_connect();
?>
<!Doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>PAGE CONNEXION TEST</title>
</head>
<body>

    <h1>Connexion ok</h1>

    <a class="btn btn-primary" href="<?php echo ROOT_URL . '/index.php'?>"> Home</a>
</body>
</html>