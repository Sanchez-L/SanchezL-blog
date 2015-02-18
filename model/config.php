<?php

require_once (__DIR__ . "/database.php");

session_start();

$path = "/SanchezL-blog/";
$host = "localHost";
$username = "root";
$password = "root";
$database = "blog_db";

if(!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}