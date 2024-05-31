<?php
// login.php
session_start();
require __DIR__.'/phpBackEnd/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (findUser($email,$password)) {
        unset($_SESSION['users']);
        header('Location:index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if (isset($message)) { echo "<p>$message</p>"; } ?>
    <form method="POST">
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
