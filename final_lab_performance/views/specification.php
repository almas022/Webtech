<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ 

?>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webtech";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle user requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['create'])) {
    // User wants to create a new specification
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "INSERT INTO specification (name, description) VALUES ('$name', '$description')";
    if ($conn->query($sql) === TRUE) {
      echo "New specification created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } elseif (isset($_POST['update'])) {
    // User wants to update a specification
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $sql = "UPDATE specification SET name='$name', description='$description' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "specification updated successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  } elseif (isset($_POST['delete'])) {
    // User wants to delete a specification
    $id = $_POST['id'];
    $sql = "DELETE FROM specification WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "specification deleted successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
}

// Display the webpage
?>
<!DOCTYPE html>
<html>
<head>
  <title>Specification Management</title>
</head>
<body>
  <h1>specification Management</h1>

  <form method="POST">

        <legend>  <h2>Create specification</h2> </legend> 
         <table align="center">
          
           <tr>
          <td>Specification Name:</td>
          <td><input type="text" name="name" required>
          </td>
          </tr>

          <tr>
          <td>ADD Description:</td>
          <td> <textarea name="description" id="" cols="30" rows="10"></textarea>
          </td>
          </tr>

          
          <tr>
          <td><br></td>
          <td> <br><input type="submit" name="create" value="Create">
          </td>
          </tr>
          
        </table>
          </fieldset>
        </form>


  <form method="POST">
    <legend>  <h2>Edit specification</h2> </legend> 
         <table align="center">
          
           <tr>
          <td>ID:</td>
          <td><input type="number" name="id" required>
          </td>
          </tr>

          <tr>
          <td>Specification Name:</td>
          <td><input type="text" name="name" required>
          </td>
          </tr>


          <tr>
          <td>ADD Description:</td>
          <td> <textarea name="description" id="" cols="30" rows="10"></textarea>
          </td>
          </tr>

          
          <tr>
          <td><br></td>
          <td> <br><input type="submit" name="update" value="Update">
          </td>
          </tr>
          
        </table>
          </fieldset>
        </form>

  <form method="POST">
    <legend> <h2>Delete specification</h2> </legend> 
         <table align="center">
          
           <tr>
          <td>ID:</td>
          <td><input type="number" name="id" required>
          </td>
          </tr>

          <tr>
          <td><br></td>
          <td><input type="submit" name="delete" value="Delete">

          </td>
          </tr>
          
        </table>
          </fieldset>
        </form>

  <h2>Current specifications</h2>
  <table style="width:100%">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Description</th>
    </tr>
    <?php
    // Get all the specification from the database and display them in a table
    $sql = "SELECT * FROM specification";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "No specification found";
    }
    ?>
  </table>
  <?php
  // Close the database connection
  $conn->close();
  ?>
  <h2><a href="home.php">[Back to Home]</a></td>
</body>
</html>
<?php
    }else{
        header('location: login.php');
    }
?>
