<?php

require './functions/videosFunctions.php';
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $newVideoTitle = $_POST["New-Title"];
    $newGenre = $_POST["Genre"];
    $newYear = $_POST["Year"];
    $newPrice = $_POST["Price"];
    $newCategory = $_POST["Category"];
    $newCopies = $_POST["Copies"];
    updateVideo($id, $newVideoTitle, $newGenre, $newYear, $newPrice, $newCategory, $newCopies);
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
            <li class="nav-item"><a href="menu.php">home</a></li>
            <li class="nav-item"><a href="about.php">about us</a></li>
            <li class="nav-item"><a href="chatbot.php">chatbot</a></li>
            <li class="nav-item"><button class="nav-btn"><a href="register.php">Sign Up</a></button></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Edit a Video!</h1>
        <form class="login-form" method="POST">
            <div class="input-text">
                <input type="text" name="New-Title" placeholder="New Title" required>
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
            <button class="btn-login">Edit Video</button>
        </form>
    </div>
</body>

</html>