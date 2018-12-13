<?php

include '../../sqlConnection.php';
$dbConn = getConnection("c9");

$sql= "SELECT * FROM `lab10_quiz` WHERE `email` = :email";
$namedParameters = array();
$namedParameters[":email"] = $_GET['email'];

$stmt = $dbConn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);
 
//print_r($record);
echo json_encode($record);

?>