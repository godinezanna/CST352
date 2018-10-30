<?php

if (isset($_GET['numberOfCities'])) { 
    $numberOfCities = $_GET['numberOfCities'];

    if (isset($_GET['country'])){
        $country = $_GET['country'];
    }
    
    if (isset($_GET['order'])){
        $order = $_GET['order'];
    }

    if (!empty($_GET['country'])){
        $country = $_GET['country'];
    }

    
    echo "Your search for: <strong>$numberOfCities</strong>";
    echo $country;
    echo $order;
    
}




?>