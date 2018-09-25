 <?php
    function getLuckyNumber() {
        $luckyNumber == rand (1,10);
        if ($luckyNumber == 4) {
            $luckyNumber = 11;
        }
    
        echo "My lucky number is: " . $luckyNumber;
    
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title> Lucky Number </title>
    </head>
    
    <body>
        <h1>
            <?php
            
               getLuckyNumber();
    
            ?>
        </h1>
    
    </body>
    
</html>