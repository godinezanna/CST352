<?php
//creating connection to database

include '../../sqlConnection.php';
$dbConn = getConnection("quotes");

function displayAllQuotes() {
    global $dbConn;
    
    $sql = "SELECT * FROM q_quotes";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        
    }//end Foreach
    
} //endFunction


function displayRandomQuote() {
    global $dbConn;
    
    $randomRecord = rand(0,26);
    $sql = "SELECT * FROM q_quotes 
            NATURAL JOIN q_author  
            LIMIT $randomRecord,1";
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    //$records = $statement->fetch(); //returns only ONE record
    $records = $statement->fetchAll(PDO::FETCH_ASSOC); //returns multiple records
    
    //print_r($records);
    
    foreach ($records as $record) {
        
        echo $record['quote'] . "<br>";
        echo "<a target='authorInfo' href='authorInfo.php?authorId=".$record['authorId']."'>";
        echo  $record['firstName'] . "  " . $record['lastName'];
        echo "</a>";
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

        
         <?= displayRandomQuote() ?>
         <br><br>
      
        <iframe name="authorInfo" frameborder="0" width="600" height="300"> </iframe>
   
        <!--
        //find out how many records there eare in the quotes table.
        
        -->

    </body>
</html>

  
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:green">
      <td>1</td>
      <td>The page includes the basic form elements as in the Program Sample: Dropdown menus, radio buttons, submit button</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:green">
      <td>2</td>
      <td>When submitting the form, a "Find the Letter x" header is displayed, where "x" is the letter selected by the user</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:white">
      <td>3</td>
      <td>When submitting the form, a "Letter to Omit: x" message is displayed, where "x" is the letter to omit, selected by the user</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>4</td>
      <td>When submitting the form, a table is created and filled with random letters</td>
      <td align="center">5</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>The size of the table corresponds to the one selected by the user </td>
      <td align="center">10</td>
    </tr>  
     <tr style="background-color:#FFC0C0">
       <td>6</td>
       <td>The letter selected by the user is shown only once</td>
       <td align="center">10</td>
     </tr> 
     <tr style="background-color:#FFC0C0">
       <td>7</td>
       <td>The letter to omit is not shown in the table</td>
       <td align="center">15</td>
     </tr>      
      <tr style="background-color:#FFC0C0">
       <td>8</td>
       <td>An error message must be displayed if the "letter to find" and "letter to omit" are the same</td>
       <td align="center">10</td>
     </tr> 
      <tr style="background-color:#FFC0C0">
       <td>9</td>
       <td>The letters are shown in the right colors: red, blue, and green </td>
       <td align="center">15</td>
     </tr> 
      <tr style="background-color:#FFC0C0">
       <td>10</td>
       <td>At least five CSS rules are included</td>
       <td align="center">5</td>
     </tr>           
     <tr style="background-color:#99E999">
      <td>11</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>
