<!doctype html>

<html lang='en'>

    <head>
        <style>
            body {
                border: 1px solid black;
                margin-top: 100px;
                margin-bottom: 100px;
                margin-right: 100px;
                margin-left: 100px;
                background-color: #ffffe6;
                padding: 20px;
            }
            table {
                border-collapse: collapse;
            }
            table, td {
                border: 1px solid black;
                padding: 5px;
            }
            h1 {
                color: blue;
                text-align: center;
            }
            h3 {
                font-style: italic; 
                text-align: center;
            }
        </style>
        <title>
            Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
        </title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
    </head>

    <body>
        <h1>X &rarr;  Project 2  &larr; O<p>Naughts and Crosses</h1>
        <h3>Jerald Dana Cole<h3>
        <h2>Instructions</h2>
        <ul>
            <li>This is an interactive two-player game of Tic-Tac-Toe.</li>
            <li>X goes first, followed by O.</li>
            <li>There are nine squares on the gameboard, numbered 1 to 9.
            <li>On you turn, enter the Location number of the square you wish to mark.</li>
        </ul>
        
        <?php
            function print_board($board)
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
        ?>

        <?php
            print_board($board);
        ?>

        <form method='GET' action='process.php'>
            <h2>Select X or O:</h2>
            <input type='radio' name='choice' value='X' id='X'>
            <label for='X'>X</label>
            <br>
            <input type='radio' name='choice' value='O' id='O'>
            <label for='O'>O</label>
            <h2>Select the Location of a square in the range [1 to 9]:</h2>
            <input type='text' name='location' id='location' size='1'>
            <label for='location'>Location</label>
            <p>
            <button type='submit'>Mark Square!</button>
        </form>

        <?php if ($haveResults) { ?>
            <h2>Results</h2>
        <?php } ?>
        <?php echo "You chose to put an $choice at location $location!"; ?>

    </body>
</html>