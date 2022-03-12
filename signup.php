<?php
    require 'C:\xampp\htdocs\PHP\dbconfig\config.php';
?>

<!DOCTYPE html>
<html lang="en" and dir="auto">
<head>
    <meta charset="utf-8">
    <title>SIGN UP PAGE</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>  
    <form name= "myform"class="box" action="signup.php" method="POST" onsubmit="return validationform()">

        <h1>Sign up</h1>
        <div class="imgcontainer">
            <img src="images/avatar.png" alt="Avatar" class="avatar" style="height: 100px;
             width: 100px; image-resolution: center;">
        </div>
        
        <input type="text" name="Email" placeholder="Email" id="Email" required>
        <input type="password" name="password" placeholder="password" id="password" required>
        <input type="password" name="cpassword" placeholder="cpassword" id="password" required>
        <input name="register" type="Submit"  id="Submit" value="Submit"/ >
        <p class="message">Already Registered <a href="login.php">Login</a></p>
    </form>
	
	<?php
			if(isset($_POST['register']))
			{
				@$Email=$_POST['Email'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where Email='$Email'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Email ID Already exists.. Please try another Email ID!")</script>';
						}
						else
						{
							$query = "insert into user values('$Email','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								
								$_SESSION['Email'] = $Email;
								$_SESSION['password'] = $password;
								header( "Location: signup.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>
</body>
</html>