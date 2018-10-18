<?php
//Creating conncetion to database
$host = "localhost"; //c9
$dbname = "quotes";
$username = "root";
$password = "";

$dbConn = new PDO("mysql:host=$host;dhname=$dbname",
$username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

function displayAllQuotes() {
    global $dbConn;
    
    $sql = "SELECT * FROM q_quotes";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //Returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //Returns multiple records
    
    //print_r($records);
    
    foreach($records as $record){
        echo $record['quote']. "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Lab 5: Random Famous Quote </title>
    </head>
    <body>

        <h1> Random Famous Quote </h1>


        <?= displayAllQuotes() ?>

    </body>
</html>