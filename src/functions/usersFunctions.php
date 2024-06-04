<?php 
session_start();

//For Register
function addUsers($name, $email, $password){
    $_SESSION['users'][] = array(
        "Name" => $name,
        "Email" => $email,
        "Password" => $password
    );
}
//For Login
function validateUser($email, $password){
    $users =  $_SESSION['users'];
    foreach($users as $user){
        if ($user["Password"] == $password && $user["Email"] == $email ){
            return true;
        }
    } 
    return false;
}
?>