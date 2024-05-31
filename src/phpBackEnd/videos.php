<?php

if (!isset($_SESSION['videos'])) {
    $_SESSION['videos'] = [
        'movies' => [
            'Avengers' => ['price' => 2.99, 'copies' => 5],
            'Star Wars' => ['price' => 2.99, 'copies' => 3],
            // Add more movies here
        ]
    ];
    echo "Initialized videos array in session.";
}
?>