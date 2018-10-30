<?php

include '../../sqlConnetion.php';
$dbConn = getConnection("quotes");

function getAuthorInfo() {
    global $dbConn;
    
    $sql = "SELECT * FROM `q_author` WHERE authorId = "  . $_GET['authorId'];
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    return $record;
    
}

if (isset($_GET['authorId'])){
    $authorInfo = getAuthorInfo();
    //print_r($authorInfo);
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Update Author </title>
    </head>
    <body>
        
        <h1> Updating Author Info </h1>
        
          <form>
            First Name: <input type="text" name="firstName" value="<?= $authorInfo['firstName'] ?>" /> <br />
            Last Name: <input type="text" name="lastName"/> <br />
            Gender: 
            <input type="radio" name="gender" value="M" id="genderMale"  
            
              <?php
              
                 if ($authorInfo['gender'] == "M") {
                     
                     echo " checked ";
                     
                 }
              
              ?>

            />
                <label for="genderMale">Male</label>
            <input type="radio" name="gender" value="F" id="genderFemale"  <?= ($authorInfo['gender'] == "F")?"checked":"" ?> /> 
                <label for="genderFemale">Female</label><br>
            
            Day of birth: <input type="text" name="dob" value="<?= $authorInfo['dob'] ?>"/> <br />
            Day of death: <input type="text" name="dod" value="<?= $authorInfo['dod'] ?>"/> <br />
            Country: <input type="text" name="country" value="<?= $authorInfo['country'] ?>"/> <br>
            Profession: <input type="text" name="profession" value="<?= $authorInfo['profession'] ?>"/> <br>
            
            Image URL: <input type="text" name="imageUrl" value="<?= $authorInfo['picture'] ?>" size="40"/><br>
            Bio: 
            <textarea name="bio" cols="50" rows="5"/></textarea>
            
            <br>

            <input type="submit" value="Update Author" name="updateAuthorForm" />
        </form>
        

    </body>
</html>