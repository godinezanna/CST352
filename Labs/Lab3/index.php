<?php
$deck = range(1,52);
shuffle($deck);

$suit = array("clubs", "diamonds", "hearts","spades");
$totalPoints = 0;

function hand(){
    global $deck, $suit, $totalPoints;
    $aceCounter = 0;
    $pointCounter = 0;
    
    for($i = 1; $i < 6;$i++) {
        $lastCard = array_pop($deck);
        $faceValue = $lastCard % 13;
        if($faceValue==0){
            $faceValue = 13;
        }
        $indexSuit=($lastCard-1)/13;
        $pointCounter =  $pointCounter + $faceValue;
        if($faceValue==1){
            echo "<img src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' title= '$faceValue' class='ace' />";
            $aceCounter++; 
        }else{
           echo "<img src='cards/$suit[$indexSuit]/$faceValue.png' alt='$faceValue' title= '$faceValue'/>";
        } 
    }
    echo $pointCounter;
    $totalPoints += $pointCounter;
    return $aceCounter;
}
 
function displayCard(){
     $suit = array("clubs","spades", "diamonds", "hearts");
     
     for($i=1; $i<6; $i++){
       $card = rand(1,13);
       echo "<img src ='cards/".$suit[rand(0,3)]."/$card.png' alt ='$card' title ='$card' />";
    }
}
 
function displayWinner($p1, $p2) {
     global $totalPoints;
     if($p1 > $p2) { 
         echo "Player 1 wins $totalPoints Points";
     }
     else if($p1 < $p2) {
         echo "Player 2 wins $totalPoints Points";
     }
     else {
         echo "Tie game";
     }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 3: Ace Poker </title>
        <style>
            h1, h2, body {
                text-align: center;
            }
            .ace {
                border: 2px yellow solid;
            }
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