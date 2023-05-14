<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    $sql = "INSERT INTO addresses (name, email, mobile, address, city, zip) VALUES ('$name', '$email', '$mobile', '$address', '$city', '$zip')";
    $result = $connection->query($sql);

    if ($result === TRUE) {
        header("Location:view_contacts.php");
        exit();
    } else {
        echo "Error inserting data: " . $connection->error;
    }
}
?>