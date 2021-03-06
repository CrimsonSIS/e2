<?php

//  Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
//  Jerald Dana Cole
//  jerald_cole@alumni.harvard.edu
//  (203) 982-0677
    
    public function print_board($board)
    {
        $square_count = 0;
        echo "<table>";
        foreach ($board as $row => $row_value) {
            if ($square_count == 0) {
                echo "<tr>";
            }
            if ($square_count < 2) {
                echo "<td>$row_value</td>";
                $square_count++;
            } else {
                echo "<td>$row_value</td></tr>";
                $square_count = 0;
            }
        }
        echo "</table>";
    }

    public function move_in_range($location)
    {
        if ((int) $location >= 1 and (int) $location <= 9) {
            return true;
        } else {
            return false;
        }
    }

    public function is_available($location, $board)
    {
        if ($board [$location] != "X" and $board [$location] != "O") {
            return true;
        } else {
            return false;
        }
    }

    public function winner($choice, $board)
    {
        if ($board ['1'] == $choice and $board ['2'] == $choice and $board ['3'] == $choice) {
            return true;
        } elseif ($board ['4'] == $choice and $board ['5'] == $choice and $board ['6'] == $choice) {
            return true;
        } elseif ($board ['7'] == $choice and $board ['8'] == $choice and $board ['9'] == $choice) {
            return true;
        } elseif ($board ['1'] == $choice and $board ['4'] == $choice and $board ['7'] == $choice) {
            return true;
        } elseif ($board ['2'] == $choice and $board ['5'] == $choice and $board ['8'] == $choice) {
            return true;
        } elseif ($board ['3'] == $choice and $board ['6'] == $choice and $board ['9'] == $choice) {
            return true;
        } elseif ($board ['1'] == $choice and $board ['5'] == $choice and $board ['9'] == $choice) {
            return true;
        } elseif ($board ['3'] == $choice and $board ['5'] == $choice and $board ['7'] == $choice) {
            return true;
        } else {
            return false;
        }
    }

    public function tie($board)
    {
        $square_count = 0;
        foreach ($board as $row => $row_value) {
            if (is_numeric($board [$row])) {
                $square_count++;
            }
        }
        if ($square_count == 0) {
            return true;
        } else {
            return false;
        }
    }
