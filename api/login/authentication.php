<?php

require_once __DIR__ . '/../../config.php';

$username = $_POST['username'];
$password = $_POST['password'];

sql_connect();


$stmt = $DB->prepare("SELECT * FROM membre WHERE pseudoMemb = :pseudoMemb AND passMemb = :passMemb");
    $stmt->bindParam(':pseudoMemb', $username);
    $stmt->bindParam(':passMemb', $password);
    $stmt->execute();
    $result = $stmt->fetch();
// $conn = sql_connect();

// $username = mysqli_real_escape_string($conn, $username);
// $password = mysqli_real_escape_string($conn, $password);

// $data = sql_select('membre', '*', "pseudoMemb = $username, passMem = $password");
// $result = mysqli_query($conn, $data);

// if (mysqli_num_rows($result) == 1) {
if ($result) {
    session_start();
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    header('Location: /../../index.php');
    exit;
} else {
    // Show an error message if the login failed
    echo 'Login failed. Please check your username and password and try again.';
}