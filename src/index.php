<?php
include __DIR__.'/phpBackEnd/functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $searchTitle = $_POST['title'];

    $result = searchVideoByTitle($searchTitle);

    if ($result) {
        echo "Video found:<br>";
        echo "Title: {$result['title']}<br>";
        echo "Category: {$result['category']}<br>";
        echo "Price: {$result['price']}<br>";
        echo "Copies available: {$result['copies']}<br>";
    } else {
        echo "Video with title '$searchTitle' not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Video by Title</title>
</head>
<body>
    <h2>Search Video by Title</h2>
    <form method="POST">
        <label>Enter title:</label><br>
        <input type="text" name="title" required><br>
        <input type="submit" value="Search">
    </form>
</body>
</html>