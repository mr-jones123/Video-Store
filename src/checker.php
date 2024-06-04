<?php 
session_start();

print_r($_SESSION['users']);
unset($_SESSION['users']);

?>