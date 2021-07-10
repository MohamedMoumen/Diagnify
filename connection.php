<?php


$host_name ="localhost";
$dbuser_name = "root";
$dbpassword = "toor";
$dbname = "diagnify";
$conn = new mysqli ($host_name, $dbuser_name, $dbpassword, $dbname); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


