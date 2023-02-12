<?php

require_once __DIR__ . '/../../config.php';

$pseudo = $_POST['pseudoMemb'];

// Vérification si formulaire envoyé

if (!empty (sql_escape($_POST))) {
    //var_dump($_POST);

    if (isset($_POST['pseudoMemb'],
    $_POST['passMemb'])

    && !empty($_POST['pseudoMemb'])
    && !empty($_POST['passMemb'])
    // formulaire complet
    ){

    sql_connect();

    $sql = "SELECT * FROM `MEMBRE` WHERE `pseudoMemb` = :pseudo";
    $query = $DB->prepare($sql);
    $query->bindValue(":pseudo", $_POST['pseudoMemb'], PDO::PARAM_STR);
    $query->execute();
    $user=$query->fetch();

    if (!$user) {
        die("L'identifiant et/ou le mot de passe est incorrect"); // Le test fonctionne
    }

    // Sinon :

    if (!password_verify($_POST['passMemb'], $user['passMemb'])) {
        die ("L'utilisateur et/ou le mot de passe est incorrect");
    }

    // Tout est bon : on peut connecter l'utilisateur
    // Initialisons la variable $_SESSION
    // Démarrage de la session
    session_start();

    // Stockage des infos de l'user dans $_SESSIOn
    $_SESSION["user"] = 
    [
        "id" => $user["numMemb"],
        "prenom" => $user["prenomMemb"],
        "nom" => $user["nomMemb"],
        "pseudo" => $user["pseudoMemb"],
        "email" => $user["eMailMemb"],
        "statut" => $user["numStat"],
    ];

    $_SESSION['logged_in'] = true;

    // Rediriger vers page mon compte
    // PEDRO redirige le vers la homepage peut être afficher un message : vous êtes connectés

    header('Location: /../../connexionverif.php');



    } else {
        die("Formulaire incomplet");
    }
}


//IL FAUT REDIGER AILLEURS
//header('Location: ../../views/backend/members/list.php');