<?php
$servername = 'localhost';
$dbname = 'mydb';
$dbUsername = 'root';
$dbPassword = '';

$conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
