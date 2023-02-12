<?php

session_start();
// unset($_SESSION["user"]);
session_destroy();

//voir la redirection
header('Location: /../../index.php');