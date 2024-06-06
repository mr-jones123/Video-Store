<?php

require "./functions/videosFunctions.php";
print_r($_SESSION['videos']);
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

<body>
    <nav class="navbar">
        <h1 class="website-header">Xy's Rental Store</h1>
        <ul>
            <li class="nav-item"><a href="index.php">home</a></li>
            <li class="nav-item"><a href="about.php">about us</a></li>
            <li class="nav-item"><a href="chatbot.php">chatbot</a></li>
            <li class="nav-item"><a href="register.php"><button class="nav-btn">Sign Up</button></a></li>
        </ul>
    </nav>
    <h2 class="view-header">Your Videos</h2>
    <div class="view-table">
        <table>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Price</th>
                <th>Category</th>
                <th>Copies</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Checkout</th>
            </tr>
            <tr>
                <?php printVideos(); ?>
            </tr>
        </table>
    </div>
    <div class="view-container-button">
        <button class ="view-button"><a href="#">Add More</a></button>
        <button><a href="#">Another Button</a></button>
    </div>
</body>

</html>