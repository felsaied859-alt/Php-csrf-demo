<?php
session_start();

$csrf = bin2hex(random_bytes(8));
$_SESSION['csrf'] = $csrf;
?>
<!DOCTYPE html>
<html>
<head><title>Update Email</title></head>
<body>

<form action="handle_csrf.php" method="post">
    <label>New Email</label>
    <input type="email" name="email">
    <input type="submit" value="update">
    <input type="hidden" value="<?php echo $csrf; ?>" name="csrf">
</form>

</body>
</html>
