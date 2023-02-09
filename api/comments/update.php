<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$numCom = $_POST['numCom'];
$newdtCreCom = $_POST['dtCreCom'];
$newlibCom = $_POST['libCom'];
//$newattModOK = $_POST['attModOK'];
$newdtModCom = $_POST['dtModCom'];
//$newnotifComKOAff = $_POST['notifComKOAff'];
//$newdelLogiq = $_POST['delLogiq'];
$newnumArt = $_POST['numArt'];
$newnumMemb = $_POST['numMemb'];


sql_update('COMMENT',"dtCreCom = '$newdtCreCom'","numCom = $numCom");
sql_update('COMMENT',"libCom = '$newlibCom'","numCom = $numCom");
sql_update('COMMENT',"attModOK = '$newattModOK'","numCom = $numCom");
sql_update('COMMENT',"dtModCom = '$newdtModCom'","numCom = $numCom");
sql_update('COMMENT',"notifComKOAff = '$newnotifComKOAff'","numCom = $numCom");
sql_update('COMMENT',"delLogiq = '$newdelLogiq'","numCom = $numCom");
sql_update('COMMENT',"numArt = '$newnumArt'","numCom = $numCom");
sql_update('COMMENT',"numMemb = '$newnumMemb'","numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');