<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // User is not logged in. Redirect them to the login page
    header("Location: login.php");
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
      <li class="nav-item"><a href="menu.php">home</a></li>
      <li class="nav-item"><a href="about.php">about us</a></li>
      <li class="nav-item"><a href="chatbot.php">chatbot</a></li>
      <li class="nav-item"><button class="nav-btn"><a href="register.php">Sign Up</a></button></li>
    </ul>
  </nav>
  <div class="flex-box">
    <a href="add.php">
      <div class="item">
        <h2>Add Videos</h2>
        <p><i>Add your Videos for Rent!</i></p>
      </div>
    </a>
    <a href="about.php">
      <div class="item">
        <h2>About Us</h2>
        <p><i>Learn About the Developers</i></p>
      </div>
    </a>
    <a href="chatbot.php">
      <div class="item">
        <h2>ChatBot</h2>
        <p><i>Coming real soon....</i></p>
      </div>
    </a>
  </div>
</body>

</html>