<!DOCTYPE html>
<html>
<head>
  <title>Display</title>
  <style>
		table, th, td {
		  border: 1px solid black;
		  border-collapse: collapse;
		}
		th, td {
		  padding: 10px;
		}
	</style>
</head>
<body>
<fieldset>
    <legend>Display</legend>
    <table align="center">
    <tr>
        <td> Name </td>
        <td> PROFIT </td>  
</tr>  
       
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


$sql = "SELECT name, buyingprice, sellingprice,(sellingprice-buyingprice) as profit FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["name"]. "</td>";
    echo "<td>" . $row["profit"]. "</td>";
    echo "</tr>";
}
} 
else {
    echo "0 results";
}

$conn->close();

?> 
</td>
<tr>
<td>
    <a href="edit.php">edit</a>
</td><td>
    <a href="delete.php">delete</a>
</td>
</tr>
</table>
</fieldset>
</body>
</html>