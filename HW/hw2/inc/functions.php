<?php
$winner = 'n';
$box = array('','','','','','','','','');

if (isset($_POST["submitbtn"])){
        $box[0] = $_POST["box0"];
        $box[1] = $_POST["box1"];
        $box[2] = $_POST["box2"];
        $box[3] = $_POST["box3"];
        $box[4] = $_POST["box4"];
        $box[5] = $_POST["box5"];
        $box[6] = $_POST["box6"];
        $box[7] = $_POST["box7"];
        $box[8] = $_POST["box8"];
        //print_r($box);
    if (($box[0]=='X' && $box[1]=='X' && $box[2]=='X') || 
    ($box[3]=='X' && $box[4]=='X' && $box[5]=='X') || 
    ($box[6]=='X' && $box[7]=='X' && $box[8]=='X') || 
    ($box[0]=='X' && $box[3]=='X' && $box[6]=='X') || 
    ($box[1]=='X' && $box[4]=='X' && $box[7]=='X') || 
    ($box[2]=='X' && $box[5]=='X' && $box[8]=='X') || 
    ($box[0]=='X' && $box[4]=='X' && $box[8]=='X') || 
    ($box[2]=='X' && $box[4]=='X' && $box[6]=='X')) {
        $winner = 'X';
        print("X wins");
    }
    $blank = 0;
    for ($i=0; $i<=8; $i++){
        if ($box[$i] == ''){
            $blank = 1;
        }
    }
    if ($blank == 1 && $winner == 'n'){
        $i = rand() % 8;
        while ($box[$i] !=''){
            $i = rand() % 8;
        }
        $box[$i] = 'O';
    if (($box[0]=='O' && $box[1]=='O' && $box[2]=='O') || 
    ($box[3]=='O' && $box[4]=='O' && $box[5]=='O') || 
    ($box[6]=='O' && $box[7]=='O' && $box[8]=='O') || 
    ($box[0]=='O' && $box[3]=='O' && $box[6]=='O') || 
    ($box[1]=='O' && $box[4]=='O' && $box[7]=='O') || 
    ($box[2]=='O' && $box[5]=='O' && $box[8]=='O') || 
    ($box[0]=='O' && $box[4]=='O' && $box[8]=='O') || 
    ($box[2]=='O' && $box[4]=='O' && $box[6]=='O')) {
        $winner = 'O';
        print("O wins");
    } else if ($winner == 'n'){
        $winner = 'n';
        print("Tied game");
    }
}
}
?>