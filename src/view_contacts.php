<?php
   include 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>View Contacts</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>View Contacts</h1>
    <div class="container">
      <button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add User</a></button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">Zip</th>
          </tr>
        </thead>
        <tbody>

        <?php
          $sql = "SELECT * FROM `addresses`";
          $result = mysqli_query($connection, $sql);

          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo "<th scope='row'>" . $row['id'] . "</th>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['mobile'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['city'] . "</td>";
              echo "<td>" . $row['zip'] . "</td>";
              echo "</tr>";
            }
          } else {
            echo "Error executing query: " . mysqli_error($connection);
          }
        ?>

        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
