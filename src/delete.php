<?php
require './functions/videosFunctions.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if (isset($_POST["response"])) {
    if ($_POST["response"] == "yes") {
        deleteVideo($id);
        header("Location: view.php");
        exit;
    } 
    if ($_POST["response"] == "no") {
        header("Location: view.php");
        exit;
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
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
            <li class="nav-item"><button class="nav-btn"><a href="register.php"></a>Sign Up</button></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Delete Notice!</h1>
        <?php deleteDisplayVideos($id) ?>
        <div class="delete-container">
            <form method="POST">
                <button class="btn-delete" type="submit" name="response" value="yes">Yes</button>
                <button class="btn-delete" type="submit" name="response" value="no">No</button>
            </form>
        </div>
    </div>
</body>

</html>