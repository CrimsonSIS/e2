<?php
 
//  Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
//  Jerald Dana Cole
//  jerald_cole@alumni.harvard.edu
//  (203) 982-0677

    session_start();

    if (isset($_SESSION ['results'])) {
        extract($_SESSION ['results']);
        $haveResults = true;
    } else {
        $haveResults = false;
        $board = array(
            "1"=>"1", "2"=>"2", "3"=>"3",
            "4"=>"4", "5"=>"5", "6"=>"6",
            "7"=>"7", "8"=>"8", "9"=>"9"
        );
        $results = [
            'choice' => null,
            'location' => null,
            'message' => "",
            'board' => $board,
            'game_over' => false,
        ];
        $_SESSION ['results'] = $results;
    }

    require 'index-view.php';
