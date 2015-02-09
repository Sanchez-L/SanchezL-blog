<?php
   require_once( __DIR__ . "/../model/database.php");

    $connection = new mysqli($host, $username, $password);
    
    if($connection->connect_error) {
        die("Error: " . $connection->connect_errors);
    }
 
    $exists = $connection->select_db($database);    
    
    if(!$exists) {
        
        $jquery = $connection->query("CREATE DATABASE $database");
        
         if($jquery) {
           echo "successfully created database:" . $database;
       }
    } 
    else {
        echo "database already exists";
    }
     
       $connection->close();