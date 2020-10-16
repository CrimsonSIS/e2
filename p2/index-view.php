<!doctype html>
<!-- 
    Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
    Jerald Dana Cole
    jerald_cole@alumni.harvard.edu
    (203) 982-0677
-->

<?php $board = $_SESSION['results']['board']; ?>
<?php $message = $_SESSION['results']['message']; ?>
<?php $game_over = $_SESSION['results']['game_over']; ?>

<link rel="stylesheet" href="styles.css">
<?php include 'library.php'; ?>

<html lang='en'>

    <head>
        <title>
            Project 2: Naughts and Crosses (aka Tic-Tac-Toe)
        </title>
        <meta charset='utf-8'>
        <link href=data:, rel=icon>
    </head>

    <body>
        <h1>Project 2<p>Naughts and Crosses</h1>
        <h1>O &rarr; &larr; X</h1>
        <h3>Jerald Dana Cole<h3>
        <h2>Instructions</h2>
        <ul>
            <li>This is an interactive two-player game of Tic-Tac-Toe.</li>
            <li>X goes first, followed by O.</li>
            <li>There are nine squares on the gameboard, numbered 1 to 9.
            <li>On you turn, enter the Location number of the square you wish to mark.</li>
        </ul>
        
        <form method='GET' action='process.php'>
            <h2>Select X or O</h2>
            <input type='radio' name='choice' value='X' id='X' checked>
            <label for='X'>X</label>
            <br>
            <input type='radio' name='choice' value='O' id='O'>
            <label for='O'>O</label>
            <h2>Select a square by number [1 to 9]</h2>
            <input type='text' name='location' id='location' size='1'>
            <label for='location'>Location</label>
            <p>
            <button type='submit'>Mark Square!</button>
        </form>
        <?php echo "<h2>Results</h2>"; ?>
        <?php print_board($board); ?> 
        <br>      
        <?php
            if ($haveResults) {
                echo $message;
            }
            if ($game_over) {
                echo "<p>Game over!";
            }
        ?>
    </body>
</html>