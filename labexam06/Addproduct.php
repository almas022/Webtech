<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "product_db";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle user requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['create'])) {
    // User wants to  a new products
    $name = $_POST['name'];
    $buyingprice = $_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];
    $sql = "INSERT INTO products (name, buyingprice, sellingprice) VALUES ('$name', '$buyingprice','$sellingprice')";
    if ($conn->query($sql) === TRUE) {
      echo "New products added successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
	?>
<!DOCTYPE html>
<html>
<head>
  <title>Add products</title>
</head>
<body>

  <form method="POST">
  <fieldset>
                <legend>ADD PRODUCT</legend>
       
                <table align="center">
          
           <tr>
          <td>Name:</td>
          <td><input type="text" name="name" required>
          </td>
          </tr>

          <tr>
          <td>Buying Price:</td>
          <td><input type="number" name="buyingprice" required>
          </td>
          </tr>

          <tr>
          <td>Selling Price:</td>
          <td><input type="number" name="sellingprice" required>
          </td>
          </tr>

          <tr>

          <td><br><input type="checkbox" id="display_status" name="display_status" value="yes" ><label for="display_status">Display</label></td>
          </tr>

          <tr>
          <td><br></td>
          <td> <br><input type="submit" name="create" value="save">
          </td>
          </tr>
          
        </table>
          </fieldset>
        </form>


  <?php
  // Close the database connection
  $conn->close();
  ?>
</body>
</html>
