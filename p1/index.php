<?php
    $player_Even_tally = 0;
    $player_Odd_tally = 0;
    $count = 0;
    $results = [];

    while ($player_Even_tally < 100 and $player_Odd_tally < 100) {
        $count++;
        $roll_1 = rand(1, 6);
        $roll_2 = rand(1, 6);
        $total = $roll_1 + $roll_2;
        $isEven = fmod($count, 2) != 1;
        if ($isEven) {
            $player_Even_tally += $total;
            $results[] = "For roll $count, Player Even rolled a $roll_1 and a $roll_2 which totals $total with a cumulative score of $player_Even_tally<br>";
            if ($player_Even_tally >= 100) {
                $results [] = "<p>Player Even wins with a score of $player_Even_tally!";
                break;
            }
        } else {
            $player_Odd_tally += $total;
            $results [] = "For roll $count, Player Odd rolled a $roll_1 and a $roll_2 which totals $total with a cumulative score of $player_Odd_tally<br>";
            if ($player_Odd_tally >= 100) {
                $results [] = "<p>Player Odd wins with a score of $player_Odd_tally!";
                break;
            }
        }
    }
    require 'index_view.php';
