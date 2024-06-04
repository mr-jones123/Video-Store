<?php 
session_start();
if (!isset( $_SESSION['users'])){
    $_SESSION['users'] = array();
}
//For Register
function addUsers($name, $email,$address, $password){
    $_SESSION['users'][] = array(
        "Name" => $name,
        "Email" => $email,
        "Address" => $address,
        "Password" => $password
    );
}
//For Login
function validateUser($email, $password){
    foreach($_SESSION['users'] as $user){
        echo "Checking user: ";
        print_r($user);
        if ($user["Email"] == $email && $user["Password"] == $password){
            echo "Matching user found!";
            return true;
        }
    } 
    return false;
}
function validatePassword($password, $confirmPassword){
    if ($password == $confirmPassword){
        return true;
    }
    return false;
}
?>