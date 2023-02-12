<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';


// Vérification si formulaire envoyé

if (!empty (sql_escape($_POST))) {
    //var_dump($_POST);

    if (isset($_POST['prenomMemb'],
    $_POST['nomMemb'],
    $_POST['pseudoMemb'],
    $_POST['passMemb'],
    $_POST['eMailMemb'])
    
    && !empty($_POST['prenomMemb'])
    && !empty($_POST['nomMemb'])
    && !empty($_POST['pseudoMemb'])
    && !empty($_POST['passMemb'])
    && !empty($_POST['eMailMemb'])
    // formulaire complet
    
    ){

        // récupération des données
        $nom = strip_tags($_POST['nomMemb']);
        $prenom = strip_tags($_POST['prenomMemb']);
        $pseudo = strip_tags($_POST['pseudoMemb']);
        $email = $_POST["eMailMemb"];
        //hashage du mdp
        $pass = password_hash($_POST["passMemb"], PASSWORD_BCRYPT);
        //die($pass);

        // NOTE : amélioration -> contrôles à ajouter 

        // Connexion BDD et requête sql

        $sql = sql_insert("MEMBRE", "prenomMemb, nomMemb, pseudoMemb, passMemb, eMailMemb, numStat",
        "'$prenom', '$nom', '$pseudo', '$pass', '$email', 3");

        // Démarrage de la session
        session_start();

        $_SESSION["user"] = 
        [
            "prenom" => $prenom,
            "nom" => $nom,
            "pseudo" => $pseudo,
            "email" => $email,
            "statut" => ["STATUT_USER"],
        ];

        //var_dump($_SESSION); die;

        header('Location: ../../connexionverif2.php');

    } else {
        die("Formulaire incomplet");
    }
}


//IL FAUT REDIGER AILLEURS
//header('Location: ../../views/backend/members/list.php');