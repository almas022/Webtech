<!DOCTYPE html>  
<html>  
<head>  
<style>  
.error {color: #FF0001;}  
</style>  
</head>  
<body>  
<?php 
    session_start();
    $nameErr = $emailErr = $phoneErr = $passErr =  ""; 

?>
<html lang="en">
<head>
    <title>Signup</title>
</head>
<body>
        <form method="POST" action="../controllers/signupCheck.php" enctype="">
           
            <legend>Signup Now!</legend>
            <span class = "error">* required field </span>  <br><br> 
         <table align="center">
          
           <tr>
          <td>Name:</td>
          <td><input type="text" name="username" value="" /> 
          <span class="error">* <?php echo $nameErr; ?> </span>  

          </td>
          </tr>
        
          <tr>
          <td>Email:</td>
          <td><input type="email" name="email" value="" />
          <span class="error">* <?php echo $emailErr; ?> </span>  
          </tr>
          
          <tr>
          <td>Phone:</td>
          <td><input type="number" name="phone" value="" />
          <span class="error">* <?php echo $phoneErr; ?> </span>  
          </td>
          </tr>

          
          <tr>
          <td>Date of Birth:</td>
          <td><input type="date" name="dob" value="" />
          </td>
          </tr>

          <tr>
          <td>Password:</td>
          <td><input type="password" name="password" value="" /> 
          <span class="error">* <?php echo $passErr; ?> </span>  

          </td>
          </tr>
          
          
          <tr>
          <td><br><a href="home.php">Back to HomePage</a></td>
          <td> <br> <input type="submit" name="submit" value="signup">  
          </td>
          </tr>
          </table>
          </fieldset>
        </form>
</body>
</html>