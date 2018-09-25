<?php

include 'inc/functions.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Tic Tac Toe </title>
        <style type="text/css">
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <form name="tictactoe" method="post" action="index.php">    
        
            <?php
            
                for ($i=0; $i<=8; $i++){
                    printf('<input type="text" name="box%s" value="%s" id="box">', $i, $box[$i]);
                    if ($i == 2 || $i == 5 || $i == 8){
                        print('<br>');
                    }
                }
                if ($winner == 'n'){
                print('<input type="submit" name="submitbtn" value="Go">');
                } else {
                    print ('<input type ="button" name="newgamebtn" value="Play Again" onclick="window.location.href=\'index.php\'">');
                }
            ?>
        
        </form>
        
        
    </body>
</html>
