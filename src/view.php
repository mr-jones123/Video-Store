<?php
require "./functions/videosFunctions.php";
   unset($_SESSION['videos']);
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
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
</body>

</html>