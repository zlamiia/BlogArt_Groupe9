<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


$numCom = sql_escape($_POST['numCom']);
$newdtCreCom = sql_escape($_POST['dtCreCom']);
$newlibCom = sql_escape($_POST['libCom']);
//$newattModOK = sql_escape($_POST['attModOK']);
$newdtModCom = sql_escape($_POST['dtModCom']);
//$newnotifComKOAff = sql_escape($_POST['notifComKOAff']);
//$newdelLogiq = sql_escape($_POST['delLogiq']);
$newnumArt = sql_escape($_POST['numArt']);
$newnumMemb = sql_escape($_POST['numMemb']);


sql_update('COMMENT',"dtCreCom = '$newdtCreCom'","numCom = $numCom");
sql_update('COMMENT',"libCom = '$newlibCom'","numCom = $numCom");
sql_update('COMMENT',"attModOK = '$newattModOK'","numCom = $numCom");
sql_update('COMMENT',"dtModCom = '$newdtModCom'","numCom = $numCom");
sql_update('COMMENT',"notifComKOAff = '$newnotifComKOAff'","numCom = $numCom");
sql_update('COMMENT',"delLogiq = '$newdelLogiq'","numCom = $numCom");
sql_update('COMMENT',"numArt = '$newnumArt'","numCom = $numCom");
sql_update('COMMENT',"numMemb = '$newnumMemb'","numCom = $numCom");

header('Location: ../../views/backend/comments/list.php');