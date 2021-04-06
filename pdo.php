<?php
$dsn="mysql:host=localhost;dbname=testbdwd17";
$user = "root";
$pass = "";

try {
$dbh = new PDO($dsn,$user,$pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


