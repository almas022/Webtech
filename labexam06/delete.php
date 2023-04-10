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
  if (isset($_POST['delete'])) {
    $name = $_POST['name'];
    // User wants to delete a products
    $sql = "DELETE FROM products WHERE name='$name'";
    if ($conn->query($sql) === TRUE) {
      echo "Deleted successfully!";
    } 
    else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}
    
?>
<!DOCTYPE html>
<html>
<head>
  <title>Delete products</title>
</head>
<body>

<form method="POST"><fieldset>
                <legend>DELETE PRODUCT</legend>
   
         <table align="center">
          
         <tr>
          <td>Name:</td>
          <td><input type="text" name="name" required>
          </td>
          </tr>
          
          <tr>
          <td><br></td>
          <td> <br><input type="submit" name="delete" value="Delete">
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