<?php
    // Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
    // Jerald Dana Cole
    // jerald_cole@alumni.harvard.edu
    // (203) 982-0677

    session_start();

    $choice = $_GET ['choice'];
    $location = $_GET ['location'];

    $results = [
        'choice' => $choice,
        'location' => $location,
    ];

    $_SESSION ['results'] = $results;

    header('Location: index.php');
