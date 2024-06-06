<?php 
session_start();
function createVideos($title, $genre, $year, $price, $category, $copies){
    if (!isset($_SESSION['videos'])) {
        $_SESSION['videos'] = array();
    }

    $_SESSION['videos'][] = array(
        "ID" => count($_SESSION['videos']) + 1,
        "Title" => $title,
        "Genre" => $genre,
        "Year" => $year,
        "Price" => $price,
        "Category" => $category,
        "Copies" => $copies
    );
}


function updateVideo($id, $newTitle, $newGenre, $newYear, $newPrice, $newCategory, $newCopies) {
    foreach ($_SESSION['videos'] as &$video) {
        if ($video['ID'] == $id) {
            $video['Title'] = $newTitle;
            $video['Genre'] = $newGenre;
            $video['Year'] = $newYear;
            $video['Price'] = $newPrice;
            $video['Category'] = $newCategory;
            $video['Copies'] = $newCopies;
            break;
        }
    }
}

function deleteVideo($id) {
    foreach ($_SESSION['videos'] as $key => $video) {
        if ($video["ID"] == $id) {
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
        echo "<tr>";    echo "<td>" . $video["ID"] . "</td>";
        echo "<td>" . $video["Title"] . "</td>";
        echo "<td>" . $video["Genre"] . "</td>";
        echo "<td>" . $video["Year"] . "</td>";
        echo "<td>" . "$".$video["Price"] . "</td>";
        echo "<td>" . $video["Category"] . "</td>";
        echo "<td>" . $video["Copies"] . "</td>";
        echo "<td>" . "<button class =\"btn-table\"><a href='edit.php?id=".$video["ID"]."'>Edit</a></button>" . "</td>";
        echo "<td>" . "<button class =\"btn-table\"><a href='delete.php?id=".$video["ID"]."'>Delete</a></button>" . "</td>";
        echo "<td>" . "<button class =\"btn-table\"><a href='checkout.php?id=".$video["ID"]."'>Checkout</a></button>" . "</td>";
        echo "</tr>";
    }
}

function deleteDisplayVideos($id){
    foreach ($_SESSION['videos'] as &$video) {
            if($video["ID"] == $id){
                echo "<p>Are you use you want to delete <b>".$video["Title"]."</b></p>";
            }
    }
}

function calculateTotalPrice($id){
    foreach ($_SESSION['videos'] as &$video) {
        if($video["ID"] == $id){
           $totalPrice = $video["Price"] * $video["Copies"];
           echo "<p>Your total pay for ". $video["Title"]."<b> is $". $totalPrice ."</b></p>";  
        }
}
}
?>