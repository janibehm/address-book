<?php
include 'connection.php';

$id = $_GET['updateId'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];

    $sql = "UPDATE `addresses` SET name='$name', email='$email', mobile='$mobile', address='$address', city='$city', zip='$zip' WHERE id=$id";
    $result = $connection->query($sql);

    if ($result === TRUE) {
        header("Location:view_contacts.php");
        exit();
    } else {
        echo "Error updating data: " . $connection->error;
    }
}
mysqli_close($connection);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Address Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <h1>Address Book</h1>
    <form method="POST" action="update.php?updateId=<?php echo $id;?>">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4">Email</label>
          <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
          <label for="inputMobile">Mobile</label>
          <input type="text" class="form-control" id="inputMobile" name="mobile" placeholder="Mobile">
        </div>
      </div>
      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" id="inputCity" name="city">
        </div>
        <div class="form-group col-md-2">
          <label for="inputZip">Zip</label>
          <input type="text" class="form-control" id="inputZip" name="zip">
        </div>
      </div>
      <button type="submit" name="submit" value="Submit" class="btn btn-primary my-4">Update contact</button>
    </form>
  </div>
</body>
</html>
