<?php 
session_start();
function createVideos($title,$genre,$year,$price, $category, $copies){
    $_SESSION['videos'][] = array(
        "Title" => $title,
        "Genre" => $genre,
        "Year" => $year,
        "Price" => $price,
        "Category" => $category,
        "Copies" => $copies
    );
}
function updateVideo($title, $newTitle, $newPrice, $newCategory){
    foreach($_SESSION['videos'] as &$video){
        if ($video["Title"] == $title){
            $video["Title"] = $newTitle;
            $video["Price"] = $newPrice;
            $video["Category"] = $newCategory;
            return true;
        }
    } 
    return false;
}

function deleteVideo($title) {
    foreach ($_SESSION['videos'] as $key => $video) {
        if ($video["Title"] == $title) {
            unset($_SESSION['videos'][$key]);
            // Re-index the array to avoid gaps in the keys
            $_SESSION['videos'] = array_values($_SESSION['videos']);
            return true;
        }
    }
    return false;
}

function printVideos(){
    foreach($_SESSION['videos'] as $video){
        echo "<tr>";
        echo "<td>" . $video["Title"] . "</td>";
        echo "<td>" . $video["Genre"] . "</td>";
        echo "<td>" . $video["Year"] . "</td>";
        echo "<td>" . $video["Price"] . "</td>";
        echo "<td>" . $video["Category"] . "</td>";
        echo "<td>" . $video["Copies"] . "</td>";
        echo "<td>" . "<button><a href='#'>Edit</a></button>" . "</td>";
        echo "<td>" . "<button><a href='#'>Delete</a></button>" . "</td>";
        echo "<td>" . "<button><a href='#'>Checkout</a></button>" . "</td>";
        echo "</tr>";
    }
}
?>