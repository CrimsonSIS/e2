<?php

//  Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
//  Jerald Dana Cole
//  jerald_cole@alumni.harvard.edu
//  (203) 982-0677

    session_start();
    include 'library.php';

    $choice = $_GET ['choice'];
    $location = $_GET ['location'];
    $board = $_SESSION['results']['board'];

    $message = "";

    if (!is_numeric($location)) {
        $message = "ERROR: " . $location . " IS NOT A NUMBER.<p>Try again!";
    } elseif (!move_in_range($location)) {
        $message = "ERROR: " . $location . " IS NOT IN THE RANGE [1..9].<p>Try again!";
    } elseif (!is_available($location, $board)) {
        $message = "ERROR: " . $location . " IS TAKEN.<p>Try again!";
    } else {
        $board [$location] = $choice;
        if (winner($choice, $board)) {
            $message = $choice . " WINS!";
            $game_over = true;
        } elseif (tie($board)) {
            $message = "CAT'S GAME!";
            $game_over = true;
        } else {
            $message = "Next move!";
        }
    }

    $results = [
        'choice' => $choice,
        'location' => $location,
        'message' => $message,
        'board' => $board,
        'game_over' => $game_over,
    ];

    $_SESSION ['results'] = $results;

    header('Location: index.php');
