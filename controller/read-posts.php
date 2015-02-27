<?php

    require_once(__DIR__ . "/../model/config.php");
    
    $query = "SELECT * FROM posts";
    $result = $_SESSION["connection"]->query($query);
    
    if($result){
        while($row = mysqli_fetch_array($result)){
            
            //Milestone 3: Set the Date and Time of a Post and Display It
            $oDatetime = strtotime($row['update_datetime']);
            $sDatetime = date("m/d/y H:i",$oDatetime);
            
            echo "<div class='post'>";
            echo "<h2>" . $row['title'] . "</h2>";
            echo "<br/>";
            echo $sDatetime;
            echo "<br/>";
            echo "<p>" . $row['post'] . "</h1>";
            echo "<br/>";
            echo "<br/>";
            
            echo "</div";
        }
    }