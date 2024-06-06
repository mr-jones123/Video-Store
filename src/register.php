<?php 
    require './functions/usersFunctions.php';
    require 'welcomeEmail.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = $_POST["Name"];
        $address = $_POST["Address"];
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        $confirmPassword = $_POST["Confirm-Password"];
        if (validatePassword($password, $confirmPassword) == true){
            addUsers($name, $email,$address, $password);
            sendWelcomeEmail($email, $name);
            header('Location:login.php');
            exit;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../img/actually.jpg"> 
</head>

<body>
<nav class="navbar">
        <h1 class="website-header">Xy's Rental Store</h1>
        <ul>
            <li class="nav-item"><a href="index.php">home</a></li>
            <li class="nav-item"><a href="about.php">about us</a></li>
            <li class="nav-item"><a href="chatbot.php">chatbot</a></li>
            <li class="nav-item"><button class="nav-btn"><a href="register.php"></a>Sign Up</button></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Register</h1>
        <form class = "login-form" method="POST">
            <div class="input-text">
                <input type="text" name="Name" placeholder="Name" required>
            </div>
            <div class="input-text">
                <input type="Address" name="Address" placeholder="Address" required>
            </div>
            <div class="input-text">
                <input type="email" name="Email" placeholder="Email" required>
            </div>
            <div class="input-text">
                <input type="password" name="Password" placeholder="Password" required>
            </div>
            <div class="input-text">
                <input type="password" name="Confirm-Password" placeholder="Confirm Password" required>
            </div>
            <button class="btn-login">Register</button>
        </form>
        <div class="register-here">
        <p>Already have an account? <span style="color:#6d4dc0;"><u><a href="login.php">Log in Here</a></u></span></p>
        </div>
    </div>
</body>

</html>