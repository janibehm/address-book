<?php
include 'connection.php';

// Check if the deleteId parameter is present in the URL
if (isset($_GET['deleteId'])) {
  $deleteId = $_GET['deleteId'];

  // Create the delete query with proper syntax
  $deleteQuery = "DELETE FROM `addresses` WHERE `id` = '$deleteId'";

  // Execute the delete query
  $result = mysqli_query($connection, $deleteQuery);

  if ($result) {
    // Check if any row was affected by the deletion
    if (mysqli_affected_rows($connection) > 0) {
      // Deletion successful
      header("Location: view_contacts.php");
      exit;
    } else {
      // Deletion failed
      echo "No rows were affected. Row may not exist.";
    }
  } else {
    // Deletion failed
    echo "Error deleting row: " . mysqli_error($connection);
  }
}

// Close the database connection
mysqli_close($connection);
?>
