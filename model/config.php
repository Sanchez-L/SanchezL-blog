<?php
require_once (__DIR__ . "/database.php"); 

$path = "/SanchezL-blog/";
   $host = "localHost";
   $username = "root";
   $password = "root";
   $database = "blog_db";
   
   $connection = new Database($host, $username,$password, $database);