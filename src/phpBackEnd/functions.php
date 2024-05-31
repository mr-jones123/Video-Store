<?php
// functions.php
require_once 'users.php';
require 'videos.php';

function addUser($name, $email, $password) {
    $_SESSION['users'][] = [
        'name' => $name,
        'email' => $email,
        'password' => $password
    ];
    echo "Added user to session.";
}

function findUser($email, $password){
    $users =  $_SESSION['users'];
    foreach($users as $user){
        if ($user['email'] == $email &&  $password == $user['password']){
            return true;
        } else {
            echo "GAYY";
        }
    }
}
function searchVideoByTitle($title) {
    $videos = $_SESSION['videos'];
    if (isset( $videos)) {
        foreach ( $videos as $category => $videos) {
            foreach ($videos as $videoTitle => $details) {
                if (strcasecmp($videoTitle, $title) === 0) {
                    return [
                        'title' => $videoTitle,
                        'category' => $category,
                        'price' => $details['price'],
                        'copies' => $details['copies']
                    ];
                }
            }
        }
    }
}



?>
