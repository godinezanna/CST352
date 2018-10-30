<?php
include 'cities.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Midterm Exam: Program 1 </title>
        <style>
            @import url("styles.css");
        </style>
    </head>
    <body>
        <div class="jTron">
        <h1> Next Vacation Spots </h1>
        </div>
        <form method="get">
            Number of Cities to Visit: <input name="numberOfCities" size="5" value="" type="text">
            <a href="#" data-toggle="tooltip" title="" data-original-title="Errors displayed if number of cities is less than 2; greater than 5 if country is not 'both' or greater than 10 if it's both."><img src="img/info.png" width="15"></a>
            <br><br>
            
            Country to Visit:
               
                <input name="country" value="Mexico" id="mexico" type="radio"> <label for="mexico"> Mexico </label>
                <input name="country" value="Norway" id="norway" type="radio"> <label for="norway"> Norway </label>
                <input name="country" value="both" id="both" type="radio"> <label for="both"> Both </label>
                <a href="#" data-toggle="tooltip" title="" data-original-title="No country selected by default."><img src="img/info.png" width="15"></a>

            <br>
            Display cities to visit in alphabetical order:
            <input name="order" value="asc" id="order_asc" type="radio"> <label for="order_asc">A-Z</label>
            <input name="order" value="desc" id="order_desc" type="radio"> <label for="order_desc">Z-A</label>
            <a href="#" data-toggle="tooltip" title="" data-original-title="If checked, the names should be ordered alphabetically"><img src="img/info.png" width="15"></a>
            <br>
            
            <input name="displayImage" type="checkbox"> Display Images
            <br><br>
            
            <input name="submit" value="Display Cities to Visit!" type="submit">
            <a href="#" data-toggle="tooltip" title="" data-original-title="Errors displayed if Number of Cities or Country are not entered.">
            <img src="img/info.png" width="15"></a>
            
        </form> 
        
        
    </body>
</html>