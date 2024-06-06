<?php 
session_start();
unset($_SESSION['videos']);
unset($_SESSION['users']);
print_r($_SESSION['videos']);
print_r($_SESSION['users']);
?>