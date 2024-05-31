<?php
// users.php

session_start(); // Start the session

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
    echo "Initialized users array in session.";
}

?>