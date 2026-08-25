<?php
session_start(); // was missing in the original notes - needed to store $_SESSION values

$email    = htmlspecialchars($_POST['email'] ?? '');
$username = htmlspecialchars($_POST['username'] ?? '');
$password = htmlspecialchars($_POST['password'] ?? '');

// fake "database" for demo purposes
$user_DB = ["email" => "fathy@gmail.com", "password" => "123"];

if ($email == $user_DB['email'] && $password == $user_DB['password']) {
    $_SESSION['login'] = 'yes';
    header('Location: profile.php');
    exit; // always exit after a header() redirect
} else {
    $_SESSION['loginerror'] = "wrong email or password";
    header('Location: login.php');
    exit;
}
