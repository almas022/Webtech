<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ 

?>

    <html lang="en">
        <head>
        <title>Home Page </title>
        </head>
        <body>
            <h1>Welcome <?php echo $_SESSION['username']?></h1>
            <table>
		<tr>
	   <td><h1> <a href="index.html">PRD Specification</a></td>
	   </tr>
	   </table>
	   <table>
	   
		<tr>
	   <td><h2><a href="home.php">Home</a></td>
	   <td>
		<table>
			<tr>
		   <td>
			<a href="profile.php">[Profile]</a>
			</td>
            <td>
</td>
		   <td>
			<a href="setting.php">[Settings]</a>
		   </td>
           <td>
           <a href="../controllers/logout.php">logout</a>
		   </td>
		   </tr>
		   </table>
	   </tr>
       <br>

		<br>
	   <tr>
		<td><br><h3><a href="specification.php">ADD-UPDATE-DELETE Specification</a></h3>
	</td>
		
		</tr>
	   
	   </table>
        </body>
    </html>

<?php
    }else{
        header('location: login.php');
    }
?>

