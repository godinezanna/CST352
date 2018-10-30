<?php
session_start();
include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function displayAllAuthors(){
    global $dbConn;
    
    $sql = "SELECT firstName, lastName, country
              FROM q_author
              ORDER BY lastName";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    
    foreach ($records as $record) {
        
        echo "[<a href='updateAuthor.php'>update</a>]";
        echo "[<a href='deleteAuthor.php'>delete</a>] ";
        echo $record['lastName'] . "  " . $record['firstName'] . "   " . $record['country'] . "<br>";
        
        
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Section </title>
        <style>
            
            form {
                display:inline-block;
            }
            
        </style>
    </head>
    <body>

        <h1>  Admin Section</h1>
        Welcome <?= $_SESSION['adminName'] ?>
        
        <br><hr><br>
        <form action="addAuthor.php">
            <input type="submit" name="addAuthor" value="Add New Author"/>
        </form>
        <form action="logout.php">
            <input type="submit" name="logout" value="Logout"/>
        </form>
        <br /> <br />
        
        <?=displayAllAuthors()?>
        
    </body>
</html>