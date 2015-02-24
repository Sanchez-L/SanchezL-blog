<?php

require_once( __DIR__ . "/../model/config.php");


$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
        . "id int (11) NOT NULL AUTO_INCREMENT,"
        . "title varchar(255) NOT NULL,"
        . "post text NOT NULL,"
        . "PRIMARY KEY (id))");

if ($query) {
    echo "<h3>successfully created table: posts</h3>";
} else {
    echo "<h3>" . $_SESSION["connection"]->error . "</h3>";
}

$query = $_SESSION["connection"]->query("CREATE TABLE users("
        . "id int(11) NOT NULL AUTO_INCREMENT,"
        . "username varchar(30) NOT NULL,"
        . "email varchar(50) NOT NULL,"
        . "password char(128) NOT NULL,"
        . "salt char(128) NOT NULL,"
        . "PRIMARY KEY(id))");

if($query) {
    echo "<h3>successfully created table: users </h3>";
}
else {
    echo "<h3>" . $_SESSION["connection"]->error . "</h3>";
}

