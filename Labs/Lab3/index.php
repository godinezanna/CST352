<?php

$deck = rand(1,25); // $deck = array(1,2,3,4,5,....52);
shuffle($deck);
print_r($deck);

echo "<h1>";
print_r($deck);

function hand(){
    global $deck;
    //$handPoints = 0;
    for($i = 0; $i < 6; $i++) {
        $lastCard = array_pop($deck);
        $faceValue = $lastCard % 13;
        //echo $faceValue . "-";
        //echo $lastCard . " ";
        if ($faceValue == 0){
            $faceValue = 13;
}


function displayCard(){
    $card = rand(1,13);
    for($i=1; $i<6; $i++){
        $suit = array("clubs", "diamonds", "hearts", "spades");
        echo "<img src='cards/$suit/$card.png' alt='$card' title='$card'/>";
    }


?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker</title>
    </head>
    <body>
        <h1>Ace Poker</h1>
        <h2>Player with more aces wins all points!</h2>
        <?php
        displayCard();
        
        echo "Player 1:";
        hand();
        
        echo "<br/>";
        
        echo "Player 2:";
        hand();
        
        ?>
    </body>
    
</html>