<?php
session_start();
require 'regfunctions.php';

echo '<pre>';
print_r($_SESSION['users']);
echo '</pre>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profiles</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h1>User Profiles</h1>
    <?php
    
    if (!empty($_SESSION['users'])) {
        
        foreach ($_SESSION['users'] as $user) {
            echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px;'>";
            echo "<p>Firstname: " . htmlspecialchars($user['firstname']) . "</p>";
            echo "<p>Middlename: " . htmlspecialchars($user['middlename']) . "</p>";
            echo "<p>Lastname: " . htmlspecialchars($user['lastname']) . "</p>";
            echo "<p>Street: " . htmlspecialchars($user['street']) . "</p>";
            echo "<p>Barangay: " . htmlspecialchars($user['brgy']) . "</p>";
            echo "<p>Region: " . htmlspecialchars($user['region']) . "</p>";
            echo "<p>Zip Code: " . htmlspecialchars($user['zcode']) . "</p>";
            echo "<p>Phone: " . htmlspecialchars($user['phone']) . "</p>";
            echo "<p>Email: " . htmlspecialchars($user['email']) . "</p>";
        echo "</div>";
        }
        
    } else {
        echo "<p>No user data found.</p>";
    }
    ?>
    <button onclick="location.href='vidmanage.php'">Back</button>
</body>
</html>
