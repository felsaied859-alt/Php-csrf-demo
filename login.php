<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<form method="post" action="handle_file.php">

    <label>email</label>
    <input name="email" type="email">
    <br><br>

    <label>password</label>
    <input name="password" type="password">
    <br><br>

    <label>username</label>
    <input name="username" type="text">
    <br><br>

    <input type="submit" value="Login">

</form>

<hr>
<?php
if (isset($_SESSION['loginerror'])) {
    echo $_SESSION['loginerror'];
    unset($_SESSION['loginerror']); // show the error once, then clear it
}
?>

</body>
</html>
