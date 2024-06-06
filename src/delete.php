<?php 
require './functions/videosFunctions.php';
$id = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Videos</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="../img/actually.jpg"> 
</head>


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
        <h1>Delete Notice!</h1>
        <?php deleteDisplayVideos($id)?>
        <div class="delete-container">
            <button>Yes</button>
            <button>No</button>
        </div>
    </div>
</body>

</html>