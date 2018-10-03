<?php

include 'inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points.</h2>
        <?php
        
        echo "Player 1: ";
        $p1 = hand();
        //echo $p1;
           
         echo "<br/>";
        
        echo "Player 2: ";
        $p2 = hand();
        //echo $p2;
       
        ?>
        
        
        <h2>
            <?=displayWinner($p1, $p2)?>
        </h2>
        
    </body>
</html>