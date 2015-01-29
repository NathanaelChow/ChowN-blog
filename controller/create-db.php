<?php
    repuire_once("../model/database.php");
    
    $connection = new mysqli($host, $username, $password);

    if($connection->connect_error){
        die("error: " . $connection->connect_error);
    }
    else{
        echo "success: " . $connection->host_info;
    }

    $connection->close(); 
            