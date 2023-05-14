<?php
$host = 'db';
$port = '3306';
$database = 'crud';
$username = 'root';
$password = 'lionPass';

$connection = new mysqli($host . ':' . $port, $username, $password, $database);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
?>
