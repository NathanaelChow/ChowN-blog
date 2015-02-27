<?php

require_once(__DIR__ . "/../model/config.php");
        
        $query = $_SESSION["connection"]->query("DROP TABLE posts");
    
        if($query) {
            echo "<p>Succesfully drop table posts</p>";
        }
 
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

