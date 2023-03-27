<?php 
    session_start();
    if(isset($_REQUEST['msg'])){
        if($_REQUEST['msg'] == 'error'){
            echo "Invalid username/password";
        }
    }
?>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
<table>
		<tr>
	   <td><h1> <a href="index.php">PRD Specification</a></td>
	   </tr>
	   </table>
        <form method="POST" action="../controllers/loginCheck.php" enctype="">
        <legend>User Login</legend>


             <table align="center">
          
           <tr>
          <td>Name:</td>
          <td><input type="text" name="username" value="" /> 

          </td>
          </tr>
          <tr>
          <td>Password:</td>
          <td><input type="password" name="password" value="" /> 

          </td>
          </tr>
          
          
          <tr>
          <td><br><a href="home.php">Back to HomePage</a></td>
          <td> <br> <input type="submit" name="submit" value="login">  
          

          </tr>
          </table>
          </fieldset>

        </form>
</body>
</html>