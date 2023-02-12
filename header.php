<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Art</title>
    <!-- Load CSS -->
    <link rel="stylesheet" href="/src/css/stylephp.css">
    <link rel="stylesheet" href="/src/fonts/fonts.css">
    <link rel="stylesheet" href="/src/css/cookies.css">
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<?php
//load config
require_once 'config.php';

//load php scripts
?>
<body>

    <!-- Logo-->
    <img class="logo" src="<?php echo ROOT_URL . '/src/images/Logo.svg'?>" alt="Logo">
    <!-- Menu mobile -->
    <input type="checkbox" id="hamburger-input" class="burger-shower" />
    <label id="hamburger-menu" for="hamburger-input">
      <nav id="sidebar-menu">
        <h3>Menu</h3>
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="<?php echo ROOT_URL . '/../../index-articles.php'?>">Articles</a></li>
          <li><a href="#">Évènements</a></li>
          <li><a href="<?php echo ROOT_URL . '/views/backend/dashboard.php'?>">Admin</a></li>
        </ul>
      </nav>
    </label>

    <!-- Header -->
    <div class="header container">
        <header class="row container text-center"> 
            <img src="<?php echo ROOT_URL . '/src/images/menu-burger.svg'?>" alt="Menu">                   
            <div class="col header-content">
                <a href="/">Home</a>
            </div>
            <div class="col header-content">
                <a href="<?php echo ROOT_URL . '/../../index-articles.php'?>">Articles</a>
            </div>
            <div class="col header-content">
                <a href="#">Évènements</a>
            </div>
            <div class="col header-content">
                <a href="<?php echo ROOT_URL . '/views/backend/dashboard.php'?>">Admin</a>
            </div>
        </header>
    </div>
    <div class="search">
        <input class="form-search" id="recherche" name="recherche" placeholder="Recherche">
    </div>
    <a href="<?php echo ROOT_URL . '/index-connection.php'?>">
      <div class="account-login">
          <img class="user-account" src="<?php echo ROOT_URL . '/src/images/User.svg'?>" alt="Se connecter">
      </div>
    </a>
    <div class="margin-dash"></div>

