<?php
$host = 'db';
$port = '3306';
$database = 'crud';
$username = 'root';
$password = 'lionPass';

$connection = new mysqli($host . ':' . $port, $username, $password, $database);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
} else {
    echo 'Connection successful';

    // // SQL query to create the addresses table
    // $query = "CREATE TABLE IF NOT EXISTS addresses (
    //   id INT AUTO_INCREMENT PRIMARY KEY,
    //   name VARCHAR(255) NOT NULL,
    //   email VARCHAR(255) NOT NULL,
    //   mobile VARCHAR(20) NOT NULL,
    //   address VARCHAR(255),
    //   city VARCHAR(100),
    //   zip VARCHAR(10)
    // )";

    //  if ($connection->query($query) === TRUE) {
    //     echo " able 'addresses' created successfully or already exists";
    // } else {
    //     echo " Error creating table: " . $connection->error;
    // }
}


?>
