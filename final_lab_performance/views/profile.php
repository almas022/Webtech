<?php 
    session_start();
    if(isset($_COOKIE['flag'])){ 

?>
<table>
			<tr>
		   <td>
           <?php echo $_SESSION['username']?>
			</td>
            <td>
</td>
		   <td>
           <?php echo $_SESSION['email']?>
        		   </td>
           <td>
           <?php echo $_SESSION['phone']?>
        		   </td>
		   </tr>
		   </table>


<?php
    }else{
        header('location: login.php');
    }
?>

