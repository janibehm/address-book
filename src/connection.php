<?php
include 'config.php';

$connection = new mysqli($host . ':' . $port, $username, $password, $database);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
}
?>
