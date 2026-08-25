<?php
session_start();

if (isset($_SESSION['csrf']) && isset($_POST['csrf']) && $_SESSION['csrf'] == $_POST['csrf']) {
    $new_email = htmlspecialchars($_POST['email'] ?? '');
    echo $new_email;
} else {
    echo 'Csrf attack';
}
