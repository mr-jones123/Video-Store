<?php 
include './functions/usersFunctions.php';
addUsers("Xynil Jhed Lacap", "202211012@fit.edu.ph", "GAY");

print_r($_SESSION['users']);
unset($_SESSION['users']);
?>