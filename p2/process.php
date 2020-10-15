<?php

//  Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
//  Jerald Dana Cole
//  jerald_cole@alumni.harvard.edu
//  (203) 982-0677

    include 'library.php';

    session_start();

    $choice = $_GET ['choice'];
    $location = $_GET ['location'];

    $message = "";

    if (!is_numeric($location)) {
        $message = "ERROR: " . $location . " IS NOT A NUMBER. Try again!";
    } elseif (!move_in_range($location)) {
        $message = "ERROR: " . $location . " IS NOT IN THE RANGE [1..9]. Try again!";
    } elseif (!is_available($location, $board)) {
        $message = "ERROR: " . $location . " IS TAKEN. Try again!";
    } else {
        $board [$location] = $choice;  // set_X_or_O($choice, $location, $board);
        if (winner($choice, $board)) {
            $message = $choice . " WINS!";
        }
    }
    
    $count_filled = 0;
    foreach ($board as $row => $row_value) {
        if (!is_available($location, $board)) {
            $count_filled++;
        }
    }
    if ($count_filled == 9 and !winner($choice, $board)) {
        $message = "TIE GAME!";
    }
    
    // Prepare data for return
    $results = [
        'choice' => $choice,
        'location' => $location,
        'message' => $message,
        'board' => $board,
    ];

    $_SESSION ['results'] = $results;

    header('Location: index.php');
