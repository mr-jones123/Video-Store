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
    <title>About Us</title>
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
      <li class="nav-item"><button class="nav-btn"><a href="register.php"></a>Sign Up</button></a></li>
    </ul>
  </nav>
    <div class="about-us-wrapper">
        <h2>About Us</h2>
        <p id="context">This website is made by Group 3 of Dr. Hadji's class. This website utilizes vanilla PHP and CSS.
        Through this project, we are able to learn how server-scripting works, and this is a precursor towards our back-end developement.
        This website is not complete yet, but it should be enough for the midterm project.</p>
        <button class ="view-button"><a href="index.php">Back</a></button>  
    </div>
</body>
</html>