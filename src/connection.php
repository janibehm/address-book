<?php
    $connection = new mysqli('db', 'root', 'lionPass', 'crud');

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    } else {
        echo 'Connection successful';
    }
?>
