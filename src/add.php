<?php
require './functions/videosFunctions.php';
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $videoTitle = $_POST["Title"];
    $genre = $_POST["Genre"];
    $releaseYear = $_POST["Year"];
    $price = $_POST["Price"];
    $category = $_POST["Category"];
    $copies = $_POST["Copies"];
    createVideos($videoTitle,$genre,$releaseYear,$price,$category,$copies);
    header("Location:view.php");
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
        <h1>Add a Video!</h1>
        <form class="login-form" method="POST">
            <div class="input-text">
                <input type="text" name="Title" placeholder="Video Title" required>
            </div>
            <div class="input-text">
                <input type="text" name="Genre" placeholder="Genre" required>
            </div>
            <div class="input-text">
                <input type="number" name="Year" placeholder="Release Year" required>
            </div>
            <div class="input-text">
                <input type="number" name="Price" placeholder="Price" required>
            </div>
            <select id="category" name="Category">
                <option value="Blu-Ray">Blu-Ray</option>
                <option value="DVD">DVD</option>
                <option value="Digital">Digital</option>
            </select>   
            <div class="input-text">
                <input type="number" name="Copies" placeholder="Copies" required>
            </div>
            <button class="btn-login">Add Video</button>
        </form>
    </div>
</body>

</html>