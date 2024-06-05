<?php 
    require './functions/usersFunctions.php';

    if ($_SERVER['REQUEST_METHOD'] == "POST"){
        $email = $_POST["Email"];
        $password = $_POST["Password"];
        echo "POST array: ";
        print_r($_POST);
        echo "Users array: ";
        print_r($_SESSION['users']);
        if (validateUser($email, $password) == true){
            header('Location: home.php');
            session_destroy();
        } else {
            echo "ERROR";
            session_destroy();
        }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xy's Rental Store</title>
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
            <li class="nav-item"><a href="register.php"><button class = "nav-btn">Sign Up</button></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Login</h1>
        <form class = "login-form" method="POST">
            <div class="input-text">
                <input type="email" name="Email" placeholder="Email" required>
            </div>
            <div class="input-text">
                <input type="password" name="Password" placeholder="Password" required>
            </div>
            <button class="btn-login">Log In</button>
        </form>
        <div class="register-here">
        <p>Don't have an account? <span style="color:#6d4dc0;"><u><a href="register.php">Register Here</a></u></span></p>
        </div>
    </div>
</body>

</html>