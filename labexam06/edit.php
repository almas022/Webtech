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
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['update'])) {
    // User wants to update a products
     $name = $_POST['name'];
    $buyingprice = $_POST['buyingprice'];
    $sellingprice = $_POST['sellingprice'];

    
    $sql = "UPDATE products SET name='$name', buyingprice='$buyingprice', sellingprice='$sellingprice' WHERE name='$name'";
    if ($conn->query($sql) === TRUE) {
      echo "products updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    } 
}
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>edit products</title>
</head>
<body>

<form method="POST"><fieldset>
                <legend>EDIT PRODUCT</legend>
   
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

          <td><label for="display_status">Display:</label></td>
		      <td><input type="checkbox" id="display_status" name="display_status" value="yes" ></td>
          </tr>

          
          <tr>
          <td><br></td>
          <td> <br><input type="submit" name="update" value="save">
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