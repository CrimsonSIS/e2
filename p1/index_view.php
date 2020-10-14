<doctype html>
<html lang='en'>
    <head>
        <title>Project 1</title>
       <meta charset='utf-8'>
    </head>
    <body>
        <h1>Project 1: Roll 100!</h1>
        Jerald Dana Cole<p>jerald_cole@alumni.harvard.edu<br>(203) 982-0677
        <h2>Mechanics</h2>
        <ul>
            <li>This is a two player dice game simulation.</li>
            <li>Player Odd and Player Even alternately roll a pair of dice.</li>
            <li>A cumulative tally of each roll (being the sum of each dice valuation) is recorded for each player.<br>For example: If Player Even rolls a 4 and a 3, the tally is 7.</li>
            <li>The first player to reach a cumulative score of 100 wins!</li>
        </ul>
        <h2>Results</h2>
        <?php
            foreach ($results as $key => $value) {
                echo "$value";
            }
        ?>
    </body>
</html>     