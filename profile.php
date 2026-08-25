<?php
session_start();

if (isset($_SESSION['login'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head><title>Profile</title></head>
    <body>
        <h2>Welcome, you are logged in.</h2>
        <p><a href="csrf.php">Update your email</a></p>
    </body>
    </html>
    <?php
} else {
    header('Location: login.php');
    exit;
}
