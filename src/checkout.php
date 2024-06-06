<?php
require './functions/videosFunctions.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    deleteVideo($id);
    header("Location: thanks.php");
    exit;
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
            <li class="nav-item"><button class="nav-btn"><a href="register.php"></a>Sign Up</button></a></li>
        </ul>
    </nav>
    <div class="container">
        <h2>Payment</h2>
        <form class="login-form" method="POST">
            <?php calculateTotalPrice($id); ?>
            <div class="input-text">
                <h3>Accepted Cards:</h3>
                <img src="../img/imgcards.png">
            </div>
            <div class="input-text">
                <input type="text" name="Account Number" placeholder="Account Number" required>
            </div>
            <div class="input-text">
                <input type="text" name="Name-on-Card" placeholder="Name on Card" required>
            </div>
            <div class="input-text">
                <input type="text" name="Expiry" placeholder="Expiry Date   " required>
            </div>
            <div class="input-text">
                <input type="pasword" name="Security-Code" placeholder="CV" required>
            </div>
            <button class="btn-login">Pay</button>
            <button class="btn-login"><a href="view.php">Cancel</a></button>
            
        </form>
    </div>
</body>

</html>