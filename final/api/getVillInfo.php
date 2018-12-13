<?php
include '../sqlConnection.php';
$dbConn = getConnection("heroes");

function displayVillain() {
    global $dbConn;
    
    $sql = "SELECT name, fullName, gender, powers, race, universe, bio, img
            FROM Villains 
            WHERE villain_id = :id";
            
    $namedParameters = array();
    $namedParameters[":id"] = $_GET['villain_id'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute($namedParameters);
    $villain = $stmt->fetch(PDO::FETCH_ASSOC); 
    //print_r($hero);
    return $villain;
}        
    
    $villain = displayVillain();
    
    echo json_encode($villain);
?>