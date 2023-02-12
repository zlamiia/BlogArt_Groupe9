<?php

session_start();
unset($_SESSION["user"]);

//voir la redirection
header("Location: index.php");