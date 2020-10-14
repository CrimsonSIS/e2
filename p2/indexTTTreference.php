<?php
    echo "\nNaughts and Crosses, aka\n";
    echo "Tic Tac Toe\n\n";
    echo "Jerald Dana Cole\n\n";

    $board = array(
        "1"=>"1", "2"=>"2", "3"=>"3",
        "4"=>"4", "5"=>"5", "6"=>"6",
        "7"=>"7", "8"=>"8", "9"=>"9"
    );
    
    function print_board($board)
    {
        $square_count = 0;
        foreach ($board as $row => $row_value) {
            if ($square_count < 2) {
                echo "$row_value    ";
                $square_count++;
            } else {
                echo "$row_value    \n";
                $square_count = 0;
            }
        }
        echo "\n";
    }

    function set_X_or_O($marker, &$move, &$board)
    {
        $board [$move] = $marker;
    }

    function move_in_range($move)
    {
        if ((int) $move >= 1 and (int) $move <= 9) {
            return true;
        } else {
            return false;
        }
    }

    function is_even($number)
    {
        if ($number % 2 == 0) {
            return true;
        } else {
            return false;
        }
    }

    function is_available($move, $board)
    {
        if ($board [$move] != "X" and $board [$move] != "O") {
            return true;
        } else {
            return false;
        }
    }

    function winner($marker, &$board)
    {
        if ($board ['1'] == $marker and $board ['2'] == $marker and $board ['3'] == $marker) {
            return true;
        } elseif ($board ['4'] == $marker and $board ['5'] == $marker and $board ['6'] == $marker) {
            return true;
        } elseif ($board ['7'] == $marker and $board ['8'] == $marker and $board ['9'] == $marker) {
            return true;
        } elseif ($board ['1'] == $marker and $board ['4'] == $marker and $board ['7'] == $marker) {
            return true;
        } elseif ($board ['2'] == $marker and $board ['5'] == $marker and $board ['8'] == $marker) {
            return true;
        } elseif ($board ['3'] == $marker and $board ['6'] == $marker and $board ['9'] == $marker) {
            return true;
        } elseif ($board ['1'] == $marker and $board ['5'] == $marker and $board ['9'] == $marker) {
            return true;
        } elseif ($board ['3'] == $marker and $board ['5'] == $marker and $board ['7'] == $marker) {
            return true;
        } else {
            return false;
        }
    }

    print_board($board);

    $count_moves = 0;
    
    while ($count_moves < 9) {
        if (is_even($count_moves)) {
            $marker = "X";
        } else {
            $marker = "O";
        }
        echo("$marker's turn:\n");
        $move = readline("Enter the number of a square to mark [1..9]: ");
        if (is_numeric($move)) {
            if (move_in_range($move)) {
                if (is_available($move, $board)) {
                    set_X_or_O($marker, $move, $board);
                    print_board($board);
                    $count_moves++;
                    if (winner($marker, $board)) {
                        echo "*******\n";
                        echo "$marker WINS!\n";
                        echo "*******\n\n";
                        break;
                    }
                } else {
                    echo("ERROR: THAT SPACE IS TAKEN. Try again!\n\n");
                }
            } else {
                echo "ERROR: $move IS NOT IN THE RANGE [1..9]. Try again!\n\n";
            }
        } else {
            echo "ERROR: $move IS NOT A NUMBER. Try again!\n\n";
        }
    }
    if ($count_moves == 9 and !winner($marker, $board)) {
        echo "*********\n";
        echo "TIE GAME!\n";
        echo "*********\n\n";
    }
